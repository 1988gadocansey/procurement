<?php
/**
 * Created by PhpStorm.
 * User: gadoo
 * Date: 06/05/2019
 * Time: 4:12 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SearchController extends  Controller
{

    public function  index(Request $request, HelpController $help){
        $regions=$help->getRegions();
        return view("search")->with("regions",$regions);

    }
}