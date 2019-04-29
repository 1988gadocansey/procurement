<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity;

class PersonController extends Controller
{



    public function create(HelpController $help)
    {
        $regions = $help->getRegions();
        return view('people.create')->with("regions", $regions);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'entity_type' => 'required',
            'business_name' => 'required|unique:people',
            'telephone' => 'required|unique:people',
            'registration_number' => 'required',
            'year_of_registration' => 'required',
            'email' => 'required',
            'physical_address' => 'required',
            'district' => 'required',


        ]);


            $user=\Auth::user()->id;
            $entity = $request->input('entity_type');
            $name = $request->input('name');
            $phone = $request->input('phone');
            $tin = $request->input('tin');
            $email = $request->input('email');
            $district = $request->input('district');
            $region = $request->input('region');
            $registration = $request->input('registration');
            $location = $request->input('location');
            $position = $request->input('position');
            $category = $request->input('category');
            $contact = $request->input('contact');
            $year = $request->input('year');
            $gps = $request->input('gps');


            $people = new Entity();
            $people->physical_address = $location;
            $people->email = $email;
            $people->telephone = $phone;
            $people->business_name = $name;
            $people->registration_number = $registration;
            $people->user = $user;
            $people->region = $region;
            $people->district = $district;
            $people->tin = $tin;
            $people->position = $position;
            $people->entity_type = $entity;
            $people->category = $category;
            $people->contact_name = $contact;
            $people->year_of_registration = $year;
            $people->ghana_post_gps = $gps;

            $people->save();




    }
}
