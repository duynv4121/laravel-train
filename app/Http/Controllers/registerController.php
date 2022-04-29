<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Children;
use App\Models\Parents;
use App\Models\Company;
use App\Models\Family;
use Carbon\Carbon;
use Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;


use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }


    public function check(Request $request)
    {
        $data = $request->all();

        // return $data;
    
        $dataAll = $data['dataAll'];
        $vmParents = [];
        $messageError = [
            'location.block.required' => 'Please input block',
            'location.street.required' => 'Please input street',
            'location.postal_code.required' => 'Please input postal code',
            'location.postal_code.integer' => 'Invalid postal code',
            'location.unit.integer'=> 'Invalid unit number',


           
            'child_info.*.family_name.required' => 'Please input family name of child #:position',
            'child_info.*.given_name.required' => 'Please input given name of child #:position',
            'child_info.*.date_of_birth.required' => 'Please input date birthday of child #:position',
            'child_info.*.date_start.after_or_equal' => 'dsfsd',
        ];
        foreach ($dataAll['parents'] as $key => $parent) { 
            if($parent['family_name'] || $parent['first_name'] || $data['dataAll']['people_contact'] == $key ) {
                $parents[$key] = $parent;
                $messageError['parents.'.$key.'.family_name.required'] = ucfirst($key) . ' family name is required';
                $vmParents[] = $parent;
            }
        }

        $ruleCom =[
            'company' => 'required|array',
            'company.company_name' => 'required',
            'company.attention_to' => 'required',
            'company.address' => 'required',
            'company.email_address' => 'required',
        ];
    
        $rule = [
            'payment_bill' => 'required',
            'parents' => 'required|array',
            'parents.*.family_name' => 'required',
            'parents.*.first_name' => 'required',
            'parents.*.mobile_phone' => 'required',
            'parents.*.email_address' => 'required',

            'location' => 'required|array',
            'location.block' => 'required',
            'location.street' => 'required',
            'location.postal_code' => 'required|integer',
            'location.unit' => 'integer',

            'child_info' => 'required|array',
            'child_info.*.family_name' => 'required',
            'child_info.*.given_name' => 'required',
            'child_info.*.date_of_birth' => 'required|date',
            'child_info.*.date_start' => 'date|after_or_equal:now',
        ];

        
        if($dataAll['payment_bill'] == 'other'){
            $rule = array_merge($rule, $ruleCom);
        }
      
        $validator = Validator::make($data['dataAll'], $rule, $messageError);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ]);
        }

        //insert family

        try {
            DB::beginTransaction();

            //insert family
            $family = new Family;
            $family->save();

            $first_contact_id = null;
            $payment_contact_id = null;
            $payment_contact_type = $dataAll['payment_bill'] === 'other' ? 'company' : 'parent';
        
            foreach  ($vmParents as $vm) { 
                $vm['family_id'] = $family->id;
                $parent = Parents::create($vm);
                if($dataAll['people_contact'] == $parent->type) {
                    $first_contact_id = $parent->id;
                }
                if($dataAll['payment_bill'] == $parent->type) {
                    $payment_contact_id = $parent->id;
                }
            }

            if($payment_contact_type === 'company' ) {
                $vm = $dataAll['company'];
                $vm['coordinates'] = null;
                $company = Company::create($vm);
                $payment_contact_id = $company->id;
            }
    
            foreach ($dataAll['child_info'] as $child) { 
                $vm = $child;
                $vm['family_id'] = $family->id;
                $vm['first_contact_id'] = $first_contact_id;
                $vm['payment_contact_type'] = $payment_contact_type;
                $vm['payment_contact_id'] =  $first_contact_id;
                $vm['date_of_birth'] = Carbon::createFromFormat('d/m/Y',  $child['date_of_birth'])->format('Y-m-d');
                $vm['date_start'] = Carbon::createFromFormat('d/m/Y',  $child['date_start'])->format('Y-m-d');

                $image_64 = $child['image']; //your base64 encoded data
                $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
                $imageName = 'children'.Carbon::now()->timestamp.'.'.$extension;
                $image_64 = str_replace('data:image/png;base64,', '', $image_64);
                $image_64 = str_replace(' ', '+', $image_64);
                file_put_contents(storage_path() . '/register/family_' . $family->id . $imageName,  base64_decode($image_64));
                $vm['image'] = $imageName;

                $child = Children::create($vm);
            }

             //insert location
            $vm = $dataAll['location'];
            $vm['type_pickup_dropoff'] = 'pickup';
            $vm['location'] = null;
            $vm['coordinates'] = null;
            $vm['child_id'] = $child->id;
            Company::create($vm);

            DB::commit();
            return response()->json(['message'=>'Thanks you register submitted successfully','success' => true]);
        } catch (\Throwable $exception) {
            DB::rollBack();
            logger('---------------', [$exception->getMessage(), $exception->getTrace()]);
            return response()->json(['message'=>'Error register','success' => false]);
        }
    }


    public function edit($id)
    {
        $parents = parents::find($id);
        $child = children::where('id_parent', $parents->id)->get();
        return view('edit-register', compact('parents', 'child'));
    }
}