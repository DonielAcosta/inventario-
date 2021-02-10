<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Sub_Stock;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
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
        $Stock = Stock::paginate(10); 

       return view('Stock.listStock', compact('Stock','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $product = Product::all();
        $Sub_Stock = Sub_Stock::all();

        return view('Stock.createStock',compact('product','Sub_Stock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Stock= new Stock;
        // dd($request->all());
        $Stock->quantity=$request->input('quantity');
        $Stock->observation=$request->input('observation');
        $Stock->id_product=$request->input('id_product');
        $Stock->id_sub_stock=$request->input('id_sub_stock');
        $Stock->save();
        //dd($Product);
        return redirect('/Stock');
        //return redirect()->route('product.listProduct');
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
        $Stock= Stock::findOrfail($id);
        $product= product::all();
        $Sub_Stock= Sub_Stock::all();
         
        return view('Stock.editStock',compact('Stock','product','Sub_Stock'));
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
        $Stock= Stock::findOrfail($id);

        $Stock->quantity=$request->input('quantity');
        $Stock->observation=$request->input('observation');
        $Stock->id_product=$request->input('id_product');
        $Stock->id_sub_stock=$request->input('id_sub_stock');
        $Stock->save();
        return redirect()->route('Stock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Stock= Stock::findOrfail($id);
        $Stock->delete();
        return redirect()->route('Stock.index');
    }
}
