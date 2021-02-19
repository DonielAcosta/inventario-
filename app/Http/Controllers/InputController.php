<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Input;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $texto=trim($request->get("texto"));
        $Input = Input::paginate(10);
        
       return view('Input.listInput', compact('Input','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        $User = user::all();
        

        return view('Input.createInput',compact('supplier','User'));
    }

    /**
     * Store a newly create'd resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Input = new Input;

        $Input->id_user=$request->input('id_user');
        $Input->id_supplier=$request->input('id_supplier');
        $Input->whole=$request->input('whole');
        $Input->date=$request->input('date');
        $Input->n_invoice=$request->input('n_invoice');
        $Input->save();
        //dd($Product);
        return redirect('/Input');
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
        // dd($id);
        $Input = Input::findOrfail($id);
        $supplier= Supplier::all();
        $User = user::all();
        // return  $Category;
        // dd($id);
        return view('Input.editInput',compact("Input",'supplier', 'User'));
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
       $Input = Input::findOrfail($id);

       $Input->id_user=$request->input('id_user');
       $Input->id_supplier=$request->input('id_supplier');
       $Input->whole=$request->input('whole');
       $Input->date=$request->input('date');
       $Input->n_invoice=$request->input('n_invoice');
       $Input->save();
       // dd($request,$id);
       return redirect()->route('Input.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Input= Input::findOrfail($id);
        $Input->delete();
        return redirect()->route('Input.index');
    }

      protected function validator(array $data)
    {
        return Validator::make($data, [
            'id_user' => ['number'],
            'id_supplier' => ['number'],
            'whole' => ['number'],
            'n_invoice' => ['number'],
        ]);
    }
}
