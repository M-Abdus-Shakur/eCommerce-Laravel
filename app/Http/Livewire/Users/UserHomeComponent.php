<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class UserHomeComponent extends Component
{
    public $categories;
    public $products;
    public function render()
    {
        $this->categories = Category::all();
        $this->products = Product::orderBy('created_at', 'ASC')->take(2)->get();
        return view('livewire.users.user-home-component')->layout('layouts.user');
    }
}
