<?php

namespace App\Http\Livewire;
use App\Models\id ;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class Category extends Component
{
    public $selectedCategory = null;
    public $productId;

    public function mount($id)
    { 
        $this->productId = $id;
     
    }


    public function render(){
  
        $brands = [
            'Laptops & Computers' => [
                "Apple",
                "Dell",
                "HP",
                "Lenovo",
                "Asus",
                "Acer",
                "MSI",

            ],
            'Smart Phone' => [
                "Apple",
                "Samsung",
                "Google",
                "Huawei",
                "Xiaomi",
                "Sony",
                "Lenovo",
                "Asus",
                "Oppo",
                "Realme"
            ]

        ];

        $os = [
            'Laptops & Computers'=>  [ 
            "Windows 11 Home",
            "Windows 11 Pro",
            "Windows 10 Home",
            "Windows 10 Pro",
            "Windows Legacy System",
            "IOS",
            "Chrome",
            "Linux"],
            'Smart Phone'=>[
                "iOS 10",
                "iOS 13",
                "iOS 12",
                "iOS 14",
                "iOS 16",
                "Android 10.0",
                "Android 11.0",
                "Android 12.0",
                "Android 13.0",
                "Android 9.0",
                "Android 8.0",
                "MIUI 12"
                
            ],
        ];
        // dd($brands['Smart Phone'][0]);
        $storage = [
            '32', '64', '128', '256', '512', '1T'
        ];
        $RAM = [
            '2', '3', '4', '6', ' 8', '12', '16', '32', '64'
        ];

        $CPU = [
            "Intel Core i9-11900K - Clock Speed: Up to 5.3 GHz",
            "Intel Core i9-11900KF - Clock Speed: Up to 5.3 GHz",
            "Intel Core i9-11900 - Clock Speed: Up to 5.2 GHz",
            "Intel Core i9-11900F - Clock Speed: Up to 5.2 GHz",
            "Intel Core i7-11700K - Clock Speed: Up to 5.0 GHz",
            "Intel Core i7-11700KF - Clock Speed: Up to 5.0 GHz",
            "Intel Core i7-11700 - Clock Speed: Up to 4.9 GHz",
            "Intel Core i7-11700F - Clock Speed: Up to 4.9 GHz",
            "Intel Core i5-11600K - Clock Speed: Up to 4.9 GHz",
            "Intel Core i5-11600KF - Clock Speed: Up to 4.9 GHz",
            "Intel Core i5-11600 - Clock Speed: Up to 4.8 GHz",
            "Intel Core i5-11600F - Clock Speed: Up to 4.8 GHz",
            "Intel Core i9-10900K - Clock Speed: Up to 5.3 GHz",
            "Intel Core i9-10900KF - Clock Speed: Up to 5.3 GHz",
            "Intel Core i9-10900 - Clock Speed: Up to 5.2 GHz",
            "Intel Core i9-10900F - Clock Speed: Up to 5.2 GHz",
            "Intel Core i7-10700K - Clock Speed: Up to 5.1 GHz",
            "Intel Core i7-10700KF - Clock Speed: Up to 5.1 GHz",
            "Intel Core i7-10700 - Clock Speed: Up to 4.8 GHz",
            "Intel Core i7-10700F - Clock Speed: Up to 4.8 GHz",
            "Intel Core i7-1165G7 - Clock Speed: Up to 4.7 GHz",
            "Intel Core i7-1135G7 - Clock Speed: Up to 4.2 GHz",
            "Intel Core i7-1130G7 - Clock Speed: Up to 4.1 GHz",
            "Intel Core i7-1130G7E - Clock Speed: Up to 4.1 GHz",
            "Intel Core i7-1160G7 - Clock Speed: Up to 4.4 GHz",
            "Intel Core i7-1160G7E - Clock Speed: Up to 4.4 GHz",
            "Intel Core i7-1160G7T - Clock Speed: Up to 4.0 GHz",
            "Intel Core i7-1160G7E - Clock Speed: Up to 4.0 GHz",
            "Intel Core i7-1180G7 - Clock Speed: Up to 4.6 GHz",
            "Intel Core i7-1180G7E - Clock Speed: Up to 4.6 GHz",
            "Intel Core i5-1165G7 - Clock Speed: Up to 4.7 GHz",
            "Intel Core i5-1135G7 - Clock Speed: Up to 4.2 GHz",
            "Intel Core i5-1130G7 - Clock Speed: Up to 4.1 GHz",
            "Intel Core i5-1130G4 - Clock Speed: Up to 4.1 GHz",
            "Intel Core i5-1130G7E - Clock Speed: Up to 4.1 GHz",
            "Intel Core i5-1130G7T - Clock Speed: Up to 3.8 GHz",
            "Intel Core i5-1130G4T - Clock Speed: Up to 3.8 GHz",
            "Intel Core i5-1135G7T - Clock Speed: Up to 3.8 GHz",
            "AMD Ryzen 9 5950X - Clock Speed: Up to 4.9 GHz",
            "AMD Ryzen 9 5900X - Clock Speed: Up to 4.8 GHz",
            "AMD Ryzen 9 5900 - Clock Speed: Up to 4.7 GHz",
            "AMD Ryzen 9 5900HS - Clock Speed: Up to 4.6 GHz",
            "AMD Ryzen 7 5800X - Clock Speed: Up to 4.7 GHz",
            "AMD Ryzen 7 5800HS - Clock Speed: Up to 4.4 GHz",
            "AMD Ryzen 7 5800 - Clock Speed: Up to 4.6 GHz",
            "AMD Ryzen 5 5600X - Clock Speed: Up to 4.6 GHz",
            "AMD Ryzen 5 5600HS - Clock Speed: Up to 4.2 GHz",
            "AMD Ryzen 5 5600 - Clock Speed: Up to 4.4 GHz",
            "AMD Ryzen 9 3950X - Clock Speed: Up to 4.7 GHz",
            "AMD Ryzen 9 3900XT - Clock Speed: Up to 4.7 GHz",
            "AMD Ryzen 9 3900X - Clock Speed: Up to 4.6 GHz",
            "AMD Ryzen 9 3900 - Clock Speed: Up to 4.3 GHz",
            "AMD Ryzen 7 3800XT - Clock Speed: Up to 4.7 GHz",
            "AMD Ryzen 7 3800X - Clock Speed: Up to 4.5 GHz",
            "AMD Ryzen 7 3800 - Clock Speed: Up to 4.3 GHz",
            "AMD Ryzen 5 3600XT - Clock Speed: Up to 4.5 GHz",
            "AMD Ryzen 5 3600X - Clock Speed: Up to 4.4 GHz",
            "AMD Ryzen 5 3600 - Clock Speed: Up to 4.2 GHz"

        ];
        $GPU = [

            "GeForce RTX 3090",
            "GeForce RTX 3080",
            "GeForce RTX 3070",
            "GeForce RTX 3060 Ti",
            "GeForce RTX 3060",
            "GeForce GTX 1660 Super",
            "GeForce GTX 1660 Ti",
            "GeForce GTX 1660",
            "GeForce GTX 1650 Super",
            "GeForce GTX 1650",

            "Radeon RX 6900 XT",
            "Radeon RX 6800 XT",
            "Radeon RX 6800",
            "Radeon RX 6700 XT",
            "Radeon RX 6700",
            "Radeon RX 6600 XT",
            "Radeon RX 6600",
            "Radeon RX 6500 XT",
            "Radeon RX 6500",
            "Radeon RX 6400",


            // Intel GPUs
            "Intel Iris Xe Graphics",
            "Intel UHD Graphics",
            "Intel Xe MAX Graphics",
            "Intel Xe HPG",
            "Intel Xe HPC",
            "Intel Xe HPC Ponte Vecchio",
            "Intel Xe LP",
            "Intel Xe HP",
            "Intel Xe HPC Alchemist",
            "Intel Xe HPG Battlemage"
        ];
        $color = [
            'black', 'selver', 'blue',

        ];
        $ssize = [
            "11.6 ",
            "13.3 ",
            "14.0 ",
            "15.6 ",
            "17.3 "
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
                'Memory Storage Capacity' => $storage,
                'RAM' => $RAM,
                'GPU' => $GPU,
                'CPU Model' => $CPU,
                'Color' => $color,
                'Screen Size' => $ssize,
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
           'product' => \App\Models\Product::find($this->productId),

        ]);
    }
}
