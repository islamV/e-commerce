<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\DB ;
class Category1 extends Component
{
    public $selectedCategory = null;
    public $productId;
    public $p ;

    public function mount($id)
    { 
        $this->productId = $id;
        $this->p =Product::get()->find($id);
        $this->selectedCategory =$this->p->category->category_name ;
     

    }
 
 
  public function render(){
  
        $data = DB::table('possibilities')->first();
      
        $brands = json_decode($data->brands, true);
        $os = json_decode($data->os, true);
        $storage = json_decode($data->storage, true);
     
        $RAM= json_decode($data->RAM, true);
        $GPU = json_decode($data->GPUs, true);
        $CPU = json_decode($data->CPUs, true);
        $screenSize = json_decode($data->{'screen size'}, true);
        
        // Now you have associative arrays for all the JSON columns
        
        $color =[
        'black',
        'silver',
        'blue',
        ];
     
        $categories = [
            ['id' => 'Laptops & Computers', 'name' => 'Laptops & Computers'],
            ['id' => 'Smart Phone', 'name' => 'Smart Phone'],
            ['id' => 'Smart TV', 'name' => 'Smart TV'],
            ['id' => 'Smart Watches', 'name' => 'Smart Watches'],
            ['id' => 'Controllers & PS', 'name' => 'Controllers & PS'],
        ];

        $features = [
            'Laptops & Computers' => [
                'Brand Name' => $brands['Laptops & Computers'],
                'Operating System' => $os['Laptops & Computers'],
                'Memory Storage Capacity' => $storage['storage'],
                'RAM' => $RAM['ram'],
                'GPU' => $GPU['GPU'],
                'CPU Model' => $CPU['processors'],
                'Color' => $color,
                'Screen Size' => array_merge($screenSize['pc'],$screenSize['laptop']),
            ],
            'Smart Phone' => [
                'Brand Name' => $brands['Smart Phone'],  
                'Operating System' =>$os['Smart Phone'],  // Fill with actual data
                'Memory Storage Capacity' => $storage,  // Fill with actual data
            ],
            'Smart TV' => [
                'Brand Name' => [],  // Fill with actual data
                'Model Name' => [],  // Fill with actual data
            ],
            'Smart Watches' => [
                'Brand Name' => [],  // Fill with actual data
                'Model Name' => [],  // Fill with actual data
            ],
            'Controllers & PS' => [
                'Brand Name' => [],  // Fill with actual data
                'Model Name' => [],  // Fill with actual data
            ],
        ];
           
        return view('livewire.category1' ,[
            'categories' => $categories,
            'features' => $this->selectedCategory ? $features[$this->selectedCategory] : [],
            'product'=> Product::get()->find($this->productId)
   

        ]);
   
 
}
}
