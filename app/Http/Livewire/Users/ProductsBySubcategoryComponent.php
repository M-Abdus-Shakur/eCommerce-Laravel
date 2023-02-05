<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsBySubcategoryComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $categories, $sorting, $pagesize , $category_name, $subcategory_name;
    public $slug;
    public $subcategories;
    public $category_id;

    public function mount($category_id,$slug)
    {
        $this->slug = $slug;
        $this->category_id = $category_id;
    }

    public function gotoBack()
    {
        return redirect()->back();
    }

    public function render()
    {
        $this->categories = Category::all();
        $subcategory = Subcategory::where('slug',$this->slug)->first();
        $subcategory_id = $subcategory->id;
        $this->subcategory_name = $subcategory->subcategory_name;

        $this->subcategories = Subcategory::where('category_id',$this->category_id)->get();

        if ($this->sorting == 'date') {
            $products = Product::where('product_subcategory_id',$subcategory_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Product::where('product_subcategory_id',$subcategory_id)->orderBy('price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('product_subcategory_id',$subcategory_id)->orderBy('price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('product_subcategory_id',$subcategory_id)->paginate($this->pagesize);
        }

        return view('livewire.users.products-by-subcategory-component', [
            'products' => $products,
        ])->layout('layouts.user');
    }
}
