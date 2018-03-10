<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return $categories;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category();
        $category->nombre = $request->nombre;
        $category->descripcion = $request->descripcion;
        $category->condicion= '1';
        $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   
    // public function update(Request $request, $id)
    // {
    //     //
    // }

     public function update(Request $request)
     {
            //
        $category = Category::findOrFail($request->id);
        $category->nombre = $request->nombre;
        $category->descripcion = $request->descripcion;
        $category->condicion= '1';
        $category->save();
     }


     public function activar(Request $request)
     {
            //
        $category = Category::findOrFail($request->id);
        $category->condicion= '1';
        $category->save();
     }
     public function desactivar(Request $request)
     {
        //
        $category = Category::findOrFail($request->id);
        $category->condicion= '0';
        $category->save();
     }

    
}
