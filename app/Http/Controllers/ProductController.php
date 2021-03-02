<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //  $query = product::query();

       // $query->when(request('name') == 'name', function ($q) {
       //     return $q->where('product', '>', request('name', 0));});
       // $query->when(request('filter_by') == 'date',
       //      function ($q) {
       //         return $q->orderBy('name', request('ordering_rule', 'desc'));});
       // $authors = $query->get();
       // }
        $texto=trim($request->get("texto"));
        $product = Product::where("name","LIKE","%".$texto."%")
                    ->with("category")
                    ->orderBy("name","asc")
                    ->paginate(10); 
       return view('product.listProduct', compact('product','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $Categories = Category::all();
        return view('product.create',compact('Categories'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => ['numeric','required'],
            'name' => ['required', 'string', 'max:255'],
            'decription' => ['required', 'string'],
        ]); 
        if ($validator->fails()) {
            return redirect()->back()
                    ->withInput()
                    ->withErrors($validator->errors());
            return response()->json([
                'status' => false,
                'message' => 'Ocurrio un error al validar los datos',
                'error' => $validator->errors()
            ], 200);
        }

        $Product = new Product;
        $Product->name=$request->input('name');
        $Product->date=$request->input('date');
        $Product->decription=$request->input('decription');
        $Product->id_category=$request->input('id_category');
        $Product->save();
        //dd($Product);
        return redirect('/product');
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

      $product= product::findOrfail($id);
      $Categories = Category::all();
        
        return view('product.edit',compact('product','Categories'));
    }

    /**
     * Update the specified resource in storage. return redirect()->route('product.listProduc');
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request->all());
       $Product=Product::findOrfail($id);
       $validator = Validator::make($request->all(), [
            'id_category' => ['numeric','required'],
            'name' => ['required', 'string', 'max:255'],
            'decription' => ['required', 'string'],
        ]); 
        if ($validator->fails()) {
            return redirect()->back()
                    ->withInput()
                    ->withErrors($validator->errors());
            return response()->json([
                'status' => false,
                'message' => 'Ocurrio un error al validar los datos',
                'error' => $validator->errors()
            ], 200);
        }

       $Product->name=$request->input("name");
       $Product->date=$request->input("date");
       $Product->decription=$request->input("decription");
        //dd($Product);
       $Product->save();
       // dd($request,$id);
       return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product=Product::findOrfail($id);
        $Product->delete();
        return redirect()->route("product.index");

    }

}
