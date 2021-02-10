<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Sub_Stock;
use App\Models\Warehouse;
use Illuminate\Support\Facades\DB;

class SubstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         // $Stock=Stock::all();
        // return $Stock;
        $texto=trim($request->get("texto"));
        $Sub_Stock= Sub_Stock::paginate(10); 

       return view('Sub_Stock.listSubstock', compact('Sub_Stock','texto'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Warehouse = warehouse::all();
        return view('Sub_Stock.createSub_Stock',compact('Warehouse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $Sub_Stock = new Sub_Stock;

        $Sub_Stock->id_warehouse=$request->input('id_warehouse');
        $Sub_Stock->name=$request->input('name');
        $Sub_Stock->decription=$request->input('decription');
        $Sub_Stock->date=$request->input('date');
        $Sub_Stock->save();
        //dd($Product);
        return redirect('/Sub_Stock');
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
        $Warehouse = Warehouse::all();
        $Sub_Stock= Sub_Stock::findOrfail($id);
        
        return view('Sub_Stock.editSub_Stock',compact('Warehouse','Sub_Stock'));
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
        $Sub_Stock =Sub_Stock::findOrfail($id);

        $Sub_Stock->id_warehouse=$request->input('id_warehouse');
        $Sub_Stock->name=$request->input('name');
        $Sub_Stock->decription=$request->input('decription');
        $Sub_Stock->date=$request->input('date');
        $Sub_Stock->save();
        //dd($Product);
        return redirect()->route('Sub_Stock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sub_Stock= Sub_Stock::findOrfail($id);
        $Sub_Stock->delete();
        return redirect()->route('Sub_Stock.index');
    }
}
