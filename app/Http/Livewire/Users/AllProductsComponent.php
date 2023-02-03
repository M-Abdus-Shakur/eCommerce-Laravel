<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AllProductsComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.users.all-products-component',[
            'products' => Product::paginate(6),
        ])->layout('layouts.user');
    }
}
