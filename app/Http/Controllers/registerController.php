<?php

namespace App\Http\Controllers;
use App\Models\children;
use App\Models\parents;
use App\Models\companies;
use App\Models\locations;
use App\Models\families;


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


        $family = new families;
        $family->save();

        $parent = new parents();
        $parent->family_name = $data['dataAll']['father']['family_name'];
        $parent->first_name = $data['dataAll']['father']['first_name'];
        $parent->mobile_phone = $data['dataAll']['father']['mobile_phone'];
        $parent->office_phone = $data['dataAll']['father']['office_phone'];
        $parent->email = $data['dataAll']['father']['email_address'];
        $parent->family_id = $family->id;
        $parent->type = $family->id;
        $parent->save();


        $pick_up = new locations();
        $pick_up->block = $data['dataAll']['building_address']['block'];
        $pick_up->building = $data['dataAll']['building_address']['building'];
        $pick_up->postal_code = $data['dataAll']['building_address']['postal_code'];
        $pick_up->street = $data['dataAll']['building_address']['street'];
        $pick_up->unit = $data['dataAll']['building_address']['unit'];
        $pick_up->save();


        $payment = new companies();
        $payment->id_parent = $parent->id;
        $payment->attention = $data['dataAll']['company_address']['attention'];
        $payment->building_address = $data['dataAll']['company_address']['building_address'];
        $payment->billing_email_address = $data['dataAll']['company_address']['billing_email_address'];
        $payment->company_name = $data['dataAll']['company_address']['company_name'];
        $payment->payment_bill = $data['dataAll']['payment_bill'];
        $payment->detail_below = $data['dataAll']['detail_below'];
        $payment->save();


        $item_return = [];
        foreach ($data['dataAll']['child_info'] as $item) { 
            $item_return[] = $item;
        }

        $count_item_return = count($item_return);

        for($i=0; $i <= $count_item_return-1; $i++){
            $child = new childs();
            $child->id_parent = $parent->id;
            $child->id_pickup = $pick_up->id;
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
