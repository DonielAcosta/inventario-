<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $texto=trim($request->get("texto"));
         $Category = Category::where("name","LIKE","%".$texto."%")  
                    ->orderBy("name","asc")
                    ->paginate(10); 
       return view('Category.listCategory', compact('Category','texto'));
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $Categories = Category::all();
        return view('Category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Category = new Category;
        $Category->name=$request->input('name');
        $Category->description=$request->input('description');
        $Category->save();
        //dd($Product);
        return redirect('/Category');
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
        $Category= Category::findOrfail($id);
        // return  $Category;
        
        return view('Category.editCategory',compact('Category'));
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
         //dd($request->all());
       $Category= Category::findOrfail($id);

       $Category->name=$request->input("name");
       $Category->description=$request->input("description");
        //dd($Product);
       $Category->save();
       // dd($request,$id);
       return redirect()->route("Category.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category= Category::findOrfail($id);
        $Category->delete();
        return redirect()->route("Category.index");

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
    }
}
