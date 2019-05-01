<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;

class TenderController extends Controller
{


    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }
    public function create(HelpController $help)
    {
        $regions = $help->getRegions();
        return view('tenders.create')->with("regions", $regions);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',


            'year' => 'required',

            'industry' => 'required',


        ]);


        $user=\Auth::user()->id;
        $type = $request->input('type');
        $opportunity = $request->input('opportunity');
        $interest = $request->input('interest');
        $year = $request->input('year');
        $industry = $request->input('industry');



        $tender = new Tender();
        $tender->type = $type;
        $tender->opportunity = $opportunity;
        $tender->expression_of_interest = $interest;
        $tender->year = $year;
        $tender->industry = $industry;
        $tender->user = $user;


        $tender->save();

        return redirect("/tender/all")->with("success", "Tender created");

    }
    public function viewTenders(HelpController $help)
    {
        $user=\Auth::user()->id;
        $data=Tender::where("user",$user)->orderBy("id","desc")->paginate(10);
        return view('tenders.tenders')->with("data",$data);
    }

    public function  destroy($id){

    }
}
