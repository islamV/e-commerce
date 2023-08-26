<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =  Product::get();
       
        return view('pages.dashbord.products.products_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashbord.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse{
        // dd($request->all());
        
     $data = $request->validate([
        'title'=>'required|string',
        'description'=>'required|string',
        'price'=>'required|integer',
        'availability'=>'required|boolean',
        'quantity'=>'required|integer',
        'category_name'=> 'required|string',
     ]);

    $product = Product::create($data);
    $product->category()->create($data);

    return redirect('Products')->with('success' ,'Add new product successfuly');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
