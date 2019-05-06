<?php
/**
 * Created by PhpStorm.
 * User: gadoo
 * Date: 06/05/2019
 * Time: 4:12 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tender;

class SearchController extends  Controller
{

    public function  index(Request $request, HelpController $help){
        $regions=$help->getRegions();
        return view("search")->with("region",$regions);

    }
    public function store(Request $request, HelpController $help){
        $regions=$help->getRegions();
        $region=$request->input("region");
        $district=$request->input("district");
        $search=$request->input("search");
        if($region){
            $data=Tender::where("type","LIKE", "%" . $search. "%")->get();
        }
        return view("search")->with("data",$data)->with("region",$regions);
    }
}