<?php

namespace App\Http\Controllers;


use App\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenderController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Tender::where("user",Auth::user()->id)->orderBy("id","desc")->paginate(10);
        return view('tenders.tenders')
            ->with("data",$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(HelpController $help)
    {
        $regions = $help->getRegions();
        return view('tenders.create')->with("regions", $regions);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',

            'year' => 'required',

            'industry' => 'required',


        ]);


        $user=Auth::user()->id;
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

        return redirect("/tender")->with("success", "Tender created");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tender = Tender::find($id);

      //  return $tender;
        return view('tenders.edit')
            ->with('tender',$tender);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required',

            'year' => 'required',

            'industry' => 'required',


        ]);


        $user=Auth::user()->id;
        $type = $request->input('type');
        $opportunity = $request->input('opportunity');
        $interest = $request->input('interest');
        $year = $request->input('year');
        $industry = $request->input('industry');



        $tender = Tender::find($id);
        $tender->type = $type;
        $tender->opportunity = $opportunity;
        $tender->expression_of_interest = $interest;
        $tender->year = $year;
        $tender->industry = $industry;
        $tender->user = $user;


        $tender->save();

        return redirect("/tender")->with("success", "Tender updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tender = Tender::find($id);

        if ($tender->delete()){
            return redirect("/tender")->with("success", "Tender Deleted");
        }
    }
}
