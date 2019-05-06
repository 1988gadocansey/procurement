<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\District;
class HelpController extends Controller
{


     public function getRegions(){

         $regions= Region::orderBy("NAME")->pluck("NAME","ID")->all();
        return  $regions;
     }
    public function fetchDistricts(Request $request){



        if($request->ajax()){
            $districts = \DB::table('districts')->where('region',$request->region)->pluck("name","id")->all();
            $data = view('ajax_district',compact('districts'))->render();
            return response()->json(['options'=>$data]);
        }

    }
}
