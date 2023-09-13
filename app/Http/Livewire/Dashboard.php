<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB ;
class Dashboard extends Component{
   
    public function render()
    {
     $data = DB::table('products')
    ->selectRaw('COUNT(*) as count , "products" as table_name')
    ->unionAll(DB::table('users')
        ->selectRaw('COUNT(*) as count , "users" as table_name')
    )->unionAll(DB::table('orders')
    ->selectRaw('SUM(total_price) as sales,  "sales" as table_name')
    )
    ->get();

    $orders =Order::get();

        return view('livewire.dashboard',[
            'products'=>$data[0]->count,
            'users'=>$data[1]->count,
            'sales'=>$data[2]->count,
            'orders'=>$orders 
    
        ]);
    }
}
