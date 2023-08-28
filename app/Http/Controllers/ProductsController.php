<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
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
        'image' => 'required|array',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    
      
     ]);


     $imageData = [];

     foreach ($data['image'] as $image) {
        $extension = $image->getClientOriginalExtension();
        $imageName = time() . '_' . mt_rand(1000, 9999) . '.' . $extension;
        $image->move(public_path('photos'), $imageName);
    
        $imageData[] = $imageName; // Store only the image name
     }
$data['image'] =$imageData;

     $product = Product::create($data);
     $product->category()->create($data); 
    $product->image()->create($data);

    return redirect('Products')->with('success' ,'Add new product successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id)->first();

   
     $images=Image::find($id);

     return view('pages.dashbord.products.view',compact(['product' ,'images']));
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
        Category::where('product_id',$id)->delete();
      Product::where('id',$id)->delete();
     return  redirect('Products')->with('success' ,'deleted product successfuly');
    }

    public function buy(string $id){
        $product= Product::find($id);
        return view('big-ecommerce-main.buy product' ,compact('product'));
    }
}
