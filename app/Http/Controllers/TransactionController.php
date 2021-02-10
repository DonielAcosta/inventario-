<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Input;
use App\Models\Stock;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get("texto"));
        $Transaction= Transaction::paginate(10); 

       return view('Transaction.listTransaction', compact("Transaction"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Transaction = Transaction::findOrfail($id);
        $Product = Product::all();
        $Stock = stock::all();
        $Input = input::all();
        return view('Transaction.createTransaction', compact('Product','Stock','Input'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Transaction = Transaction::findOrfail($id);

        $Transaction = new Transaction;
        $Transaction->quantity=$request->input('quantity');
        $Transaction->price=$request->input('price');
        $Transaction->id_product=$request->input('id_product');
        $Transaction->id_stock=$request->input('id_stock');
        $Transaction->id_input=$request->input('id_input');
        $Transaction->save();
        //dd($Product);
        return redirect('/Transaction');
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
        $Transaction = Transaction::findOrfail($id);
        $Product = Product::all();
        $Stock = stock::all();
        $Input = input::all();
        // dd($id);
        return view('Transaction.editTransaction',compact('Transaction','Product','Stock','Input'));
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
        $Transaction = Transaction::findOrfail($id);

       $Transaction->quantity=$request->input('quantity');
       $Transaction->price=$request->input('price');
       $Transaction->id_product=$request->input('id_product');
       $Transaction->id_stock=$request->input('id_stock');
       $Transaction->id_input=$request->input('id_input');
       $Transaction->save();;
       // dd($request,$id);
       return redirect()->route('Transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Transaction= Transaction::findOrfail($id);
        $Transaction->delete();
        return redirect()->route('Transaction.index');

    }
}
