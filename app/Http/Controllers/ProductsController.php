<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
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
        
        return view('pages.dashbord.products.products_list', compact('products'));
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
    public function store(ProductsRequest $request): RedirectResponse
    {


        $data = $request->validated();
        $imageData = [];
        $data['details'] = $request['details'];
        foreach ($data['image'] as $image) {
            $extension = $image->getClientOriginalExtension();
            $imageName = time() . '_' . mt_rand(1000, 9999) . '.' . $extension;
            $image->move(public_path('photos'), $imageName);

            $imageData[] = $imageName; // Store only the image name
        }
        $data['image'] = $imageData;

        $product = Product::create($data);
        $product->category()->create($data);
        $product->image()->create($data);

        return redirect('Products')->with('success', 'Add new product successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::get()->find($id);
        
        return view('pages.dashbord.products.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

        $product = Product::get()->find($id);
        return view('pages.dashbord.products.edit', compact('product'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'availability' => 'required|boolean',
            'quantity' => 'required|integer',   
            'details'

        ]);
        
        $imageData = [];
        $data['details'] = $request['details'];
        foreach ($request['image'] as $image) {
            $extension = $image->getClientOriginalExtension();
            $imageName = time() . '_' . mt_rand(1000, 9999) . '.' . $extension;
            $image->move(public_path('photos'), $imageName);

            $imageData[] = $imageName; // Store only the image name
        }
        $request['image'] = $imageData;

$product = Product::get()->find($id);
$product->update($data);
$product->category()->where('product_id' ,$id)->update(['category_name'=>$request->input('category_name')]);
$product->image()->update(['image' => $request->input('image')]);



        return redirect('Products')->with('success', 'Updated  product successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('product_id', $id)->delete();
        Image::where('product_id', $id)->delete();
        Product::where('id', $id)->delete();

        return  redirect('Products')->with('success', 'deleted product successfuly');
    }

    public function showProduct(string $id)
    {
        $product = Product::get()->find($id);

        $products = Product::get();

        return view('big-ecommerce-main.show product', compact('product', 'products'));
    }
    public function addToCart($id){

        $product = Product::get()->find($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
             'id'=>$product->id ,  'title' => $product->title, 'price' => $product->price, 'image' => '/photos/' . $product->image->image[0], 'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Added to your cart successfully');
    }

    public function removeCart($id){
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Remove the item with the given ID from the cart
        unset($cart[$id]);

        // Update the session with the modified cart
        session(['cart' => $cart]);

        return redirect()->back(); // Redirect to the cart page
    }
}
