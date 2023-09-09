<?php

namespace App\Http\Livewire;
use Livewire\Component;

class Mycart extends Component{  
    public $quantities = []; // Array to store quantities for each cart item

    public function mount()
    {    
        $cartItems = session()->get('cart',[]);
        
        // Initialize quantities array with default values based on cart items
        foreach ($cartItems as $item) {
    
            $this->quantities[$item['id']] = $item['quantity'];
             
        }
    }

    public function incrementQuantity($itemId){ 
        $cart = session()->get('cart',[]);
        $this->quantities[$itemId]++;
        $cart[$itemId]['quantity'] = $this->quantities[$itemId];
        session()->put('cart', $cart);
    }

    public function decrementQuantity($itemId)
    {  
        $cart = session()->get('cart',[]);
   
        if ($this->quantities[$itemId] > 1) {
            $this->quantities[$itemId]--;
        $cart[$itemId]['quantity'] = $this->quantities[$itemId];
        session()->put('cart', $cart);


        }
    }

    public function render()
    {
        // Load cart items and pass quantities to the view
        $total= 0 ;
        $cartItems = session()->get('cart',[]);
        foreach($cartItems as $cart){
            $total += $cart['price']*$this->quantities[$cart['id']];
        }
        return view('livewire.mycart', compact('cartItems','total'));
    }
}
