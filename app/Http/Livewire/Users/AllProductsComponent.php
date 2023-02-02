<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class AllProductsComponent extends Component
{
    public $categories;
    public $products;

    public function render()
    {
        $this->categories = Category::all();
        $this->products = Product::get();
        return view('livewire.users.all-products-component')->layout('layouts.user');
    }
}
