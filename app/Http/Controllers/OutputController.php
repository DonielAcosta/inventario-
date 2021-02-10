<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Output;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class OutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get("texto"));
        $Output = Output::paginate(10);
        
       return view('Output.listOutput', compact('Output','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Stock = Stock::all();
        $User = User::all();

        return view('Output.createOutput',compact('Stock','User'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Output = new Output;

        $Output->id_user=$request->input('id_user');
        $Output->id_stock=$request->input('id_stock');
        $Output->quantity=$request->input('quantity');
        $Output->date=$request->input('date');
        $Output->observation=$request->input('observation');
        $Output->save();
        //dd($Product);
        return redirect('/Output');
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
        $Output = Output::findOrfail($id);
        $Stock= Stock::all();
        $User = user::all();
        // dd($id);
        return view('Output.editOutput',compact("User",'Stock','Output'));
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
       $Output = Output::findOrfail($id);

       $Output->id_user=$request->input('id_user');
       $Output->id_stock=$request->input('id_stock');
       $Output->quantity=$request->input('quantity');
       $Output->date=$request->input('date');
       $Output->observation=$request->input('observation');
       $Output->save();
       // dd($request,$id);
       return redirect()->route('Output.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Output= Output::findOrfail($id);
        $Output->delete();
        return redirect()->route('Output.index');
    }
}
