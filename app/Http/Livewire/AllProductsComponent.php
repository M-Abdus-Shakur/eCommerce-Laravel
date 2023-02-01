<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class AllProductsComponent extends Component
{
    public $products;
    public function render()
    {
        $this->products = Product::get();
        return view('livewire.all-products-component');
    }
}
