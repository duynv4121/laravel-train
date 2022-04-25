<?php

namespace App\Http\Controllers;
use App\Models\childs;
use App\Models\parents;


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

        $parent = new parents();

        $parent->father_family_name = $data['dataAll']['father']['father_family_name'];
        $parent->father_first_name = $data['dataAll']['father']['father_first_name'];
        $parent->father_mobile_phone = $data['dataAll']['father']['father_mobile_phone'];
        $parent->father_office_phone = $data['dataAll']['father']['father_office_phone'];
        $parent->father_email_address = $data['dataAll']['father']['father_email_address'];

        $parent->mother_family_name = $data['dataAll']['mother']['mother_family_name'];
        $parent->mother_first_name = $data['dataAll']['mother']['mother_first_name'];
        $parent->mother_mobile_phone = $data['dataAll']['mother']['mother_mobile_phone'];
        $parent->mother_office_phone = $data['dataAll']['mother']['mother_office_phone'];
        $parent->mother_email_address = $data['dataAll']['mother']['mother_email_address'];

        $parent->guardian_family_name = $data['dataAll']['guardian']['guardian_family_name'];
        $parent->guardian_first_name = $data['dataAll']['guardian']['guardian_first_name'];
        $parent->guardian_mobile_phone = $data['dataAll']['guardian']['guardian_mobile_phone'];
        $parent->guardian_office_phone = $data['dataAll']['guardian']['guardian_office_phone'];
        $parent->guardian_email_address = $data['dataAll']['guardian']['guardian_email_address'];

        $parent->block = $data['dataAll']['building_address']['block'];
        $parent->building = $data['dataAll']['building_address']['building'];
        $parent->postal_code = $data['dataAll']['building_address']['postal_code'];
        $parent->street = $data['dataAll']['building_address']['street'];
        $parent->unit = $data['dataAll']['building_address']['unit'];


        $parent->attention = $data['dataAll']['company_address']['attention'];
        $parent->building_address = $data['dataAll']['company_address']['building_address'];
        $parent->billing_email_address = $data['dataAll']['company_address']['billing_email_address'];
        $parent->company_name = $data['dataAll']['company_address']['company_name'];


        $parent->payment_bill = $data['dataAll']['payment_bill'];
        $parent->people_contact = $data['dataAll']['people_contact'];
        $parent->detail_below = $data['dataAll']['detail_below'];

        $parent->save();


        $item_return = [];
        foreach ($data['dataAll']['child_info'] as $item) { 
            $item_return[] = $item;
        }

        $count_item_return = count($item_return);

        for($i=0; $i <= $count_item_return-1; $i++){
            $child = new childs();
            $child->id_parent = $parent->id;
            $child->family_name = $item_return[$i]['family_name'];
            $child->given_name = $item_return[$i]['given_name'];
            $child->grade = $item_return[$i]['grade'];
            $child->gender = $item_return[$i]['gender'];
            $child->route = $item_return[$i]['route'];
            $child->birth_day = $item_return[$i]['birth_day'];
            $child->school_id = $item_return[$i]['school_id'];
            $child->select_type = $item_return[$i]['select_type'];
            $child->date_choose = $item_return[$i]['date_choose'];
            $child->description = $item_return[$i]['description'];
            $child->base_img = $item_return[$i]['base_img'];
            $child->save();
        }
    }


    public function edit($id)
    {
        $parents = parents::find($id);
        $child = childs::where('id_parent', $parents->id)->get();
        return view('edit-register', compact('parents', 'child'));
    }
}
