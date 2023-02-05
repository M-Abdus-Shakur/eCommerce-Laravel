<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsByCategoryComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $categories, $sorting, $pagesize , $category_name;
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $this->categories = Category::all();
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $this->category_name = $category->category_name;


        if ($this->sorting == 'date') {
            $products = Product::where('product_category_id',$category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Product::where('product_category_id',$category_id)->orderBy('price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('product_category_id',$category_id)->orderBy('price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('product_category_id',$category_id)->paginate($this->pagesize);
        }

        return view('livewire.users.products-by-category-component', [
            'products' => $products,
        ])->layout('layouts.user');
    }
}
