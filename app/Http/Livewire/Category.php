<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB ;

use Livewire\Component;

class Category extends Component
{
    public $selectedCategory = null;
 
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
                'Memory Storage Capacity' => $storage['Storage'],
                'RAM' => $RAM['RAM'],
                'GPU' => $GPU,
                'CPU Model' => $CPU['Processors'],
                'Color' => $color,
                'Screen Size' => $screenSize['Computer_Laptop_Sizes'],
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

        return view('livewire.category' ,[
            'categories' => $categories,
            'features' => $this->selectedCategory ? $features[$this->selectedCategory] : [],
   

        ]);
    }
}
