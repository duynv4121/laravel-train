<?php

namespace App\Http\Controllers;
use App\Models\childs;

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
        $count = count($data['dataAll']['childInformation']);
        $keyChildMax = max(array_keys($data['dataAll']['childInformation']));

        $fatherFamilyName = $data['dataAll']['father']['fatherFamilyName'];
        $fatherFirstName = $data['dataAll']['father']['fatherFirstName'];
        $fatherMobilePhone = $data['dataAll']['father']['fatherMobilePhone'];
        $fatherOfficePhone = $data['dataAll']['father']['fatherOfficePhone'];
        $fatherEmailAddress = $data['dataAll']['father']['fatherEmailAddress'];

        $motherFamilyName = $data['dataAll']['mother']['motherFamilyName'];
        $motherFirstName = $data['dataAll']['mother']['motherFirstName'];
        $motherMobilePhone = $data['dataAll']['mother']['motherMobilePhone'];
        $motherOfficePhone = $data['dataAll']['mother']['motherOfficePhone'];
        $motherEmailAddress = $data['dataAll']['mother']['motherEmailAddress'];

        $guardianFamilyName = $data['dataAll']['guardian']['guardianFamilyName'];
        $guardianFirstName = $data['dataAll']['guardian']['guardianFirstName'];
        $guardianMobilePhone = $data['dataAll']['guardian']['guardianMobilePhone'];
        $guardianOfficePhone = $data['dataAll']['guardian']['guardianOfficePhone'];
        $guardianEmailAddress = $data['dataAll']['guardian']['guardianEmailAddress'];

        $block = $data['dataAll']['billingAddress']['block'];
        $building = $data['dataAll']['billingAddress']['building'];
        $postalCode = $data['dataAll']['billingAddress']['postalCode'];
        $street = $data['dataAll']['billingAddress']['street'];

        $attention = $data['dataAll']['companyAddress']['attention'];
        $billingAddress = $data['dataAll']['companyAddress']['billingAddress'];
        $billingEmailAddress = $data['dataAll']['companyAddress']['billingEmailAddress'];
        $companyName = $data['dataAll']['companyAddress']['companyName'];

        $item_return = [];
        foreach ($data['dataAll']['childInformation'] as $item) { 
            $item_return[] = $item;
        }

        $count_item_return = count($item_return);

        for($i=0; $i <= $count_item_return-1; $i++){
            $childs = new childs();
            $childs->familyName = $item_return[$i]['familyName'];
            $childs->givenName = $item_return[$i]['givenName'];
            $childs->grade = $item_return[$i]['grade'];
            $childs->gender = $item_return[$i]['gender'];
            $childs->route = $item_return[$i]['route'];
            $childs->birthDay = $item_return[$i]['birthDay'];
            $childs->schoolId = $item_return[$i]['schoolId'];
            $childs->dateChoose = $item_return[$i]['dateChoose'];
            $childs->description = $item_return[$i]['description'];
            $childs->baseImg = $item_return[$i]['baseImg'];
            $childs->save();
        }
    }
}
