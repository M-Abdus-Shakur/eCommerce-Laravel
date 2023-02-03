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
    public $categories, $sorting, $pagesize;

    public function render()
    {
        $this->categories = Category::all();
        if ($this->sorting == 'date')
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price')
        {
            $products = Product::orderBy('price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price-desc')
        {
            $products = Product::orderBy('price','DESC')->paginate($this->pagesize);
        }
        else {
            $products = Product::paginate($this->pagesize);
        }


        return view('livewire.users.all-products-component', [
            'products' => $products,
        ])->layout('layouts.user');
    }
}
