<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get("texto"));
        $Supplier = Supplier::where("name","LIKE","%".$texto."%")
                    ->orderBy("name","asc")
                    ->paginate(10); 
       return view('Supplier.listSupplier', compact('Supplier','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $input = Input::all();
        // $Sub_Stock = Sub_Stock::all();

        // return view('Stock.createStock',compact('products','Sub_Stock'));
        
        return view('Supplier.createSupplier', compact('input'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
        $Supplier = new Supplier;

        $Supplier->name=$request->input('name');
        $Supplier->last_name=$request->input('last_name');
        $Supplier->email=$request->input('email');
        $Supplier->phone=$request->input('phone');
        $Supplier->rif=$request->input('rif');
        $Supplier->save();
        //dd($Product);
        return redirect('/Supplier');
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
         $Supplier= Supplier::findOrfail($id);
         return view('Supplier.editSupplier',compact('Supplier'));
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
      
       $Supplier=Supplier::findOrfail($id);
       $Supplier->name=$request->input("name");
       $Supplier->last_name=$request->input("last_name");
       $Supplier->email=$request->input("email");
       $Supplier->phone=$request->input("phone");
       $Supplier->rif=$request->input("rif");
        //dd($Product);
       $Supplier->save();
       // dd($request,$id);
       return redirect()->route("Supplier.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Supplier= Supplier::findOrfail($id);
        $Supplier->delete();
        return redirect()->route("Supplier.index");
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15'],
            'rif' => ['required', 'string', 'max:9'],
        ]);
    }

}
