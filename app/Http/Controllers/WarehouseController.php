<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Sub_Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $Warehouse= Warehouse::all();
        // return $Stock;
        $texto=trim($request->get("texto"));
        $Warehouse = Warehouse::paginate(10); 

       return view('Warehouse.listwarehouse', compact('Warehouse','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Sub_Stock = Sub_Stock::all();

        return view('Warehouse.createWarehouse',compact('Sub_Stock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Warehouse= new Warehouse;
        // dd($request->all());
        $Warehouse->name=$request->input('name');
        $Warehouse->quantity=$request->input('quantity');
        $Warehouse->save();
        //dd($Product);
        return redirect('/Warehouse');
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
        $Warehouse= Warehouse::findOrfail($id);
         return view('Warehouse.editWarehouse',compact('Warehouse'));
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
        $Warehouse=Warehouse::findOrfail($id);
    
        $Warehouse->name=$request->input('name');
        $Warehouse->quantity=$request->input('quantity');
        $Warehouse->save();

       // dd($request,$id);
       return redirect()->route('Warehouse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Warehouse= Warehouse::findOrfail($id);
        $Warehouse->delete();
        return redirect()->route('Warehouse.index');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['number'],
        ]);
    }
}
