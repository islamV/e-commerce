<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Illuminate\Http\RedirectResponse ;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function order(): RedirectResponse{

            $carts  = session()->get('cart' ,[]);

           $order =Order::create([
            'product_id' => $carts[1]['id'],
            'user_id' => Auth::user()->id,
            'quantity' =>$carts[1]['quantity'] ,
            'total_price' => ($carts[1]['price']*$carts[1]['quantity']) ,

           ]) ;
            return redirect()->back()->with('success' ,'Ordered successfuly');
         }

}
