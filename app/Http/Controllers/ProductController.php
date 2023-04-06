<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view("products", [ "products" => Product::all() ]);
    }

    /**
     * Display a listing of the resource as admin dashboard.
     */
    public function dashboard(string $pagination = "5"){
        return view("dashboard", [ "products" => Product::paginate($pagination) ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("edit", [ "product" => Product::find($id) ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $product = Product::find($id);
        $product->delete();
        return redirect("/");
    }
}
