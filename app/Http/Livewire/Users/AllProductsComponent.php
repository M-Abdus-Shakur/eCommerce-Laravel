<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AllProductsComponent extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.users.all-products-component',[
            'products' => Product::paginate(1),
        ])->layout('layouts.user');
    }
}
