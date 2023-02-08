<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ViewSingleProductComponent extends Component
{
    public $categories;
    public $product_similar_subcategory;
    public $product , $product_id;

    public function mount($id)
    {
        $this->product_id = $id;
    }

    public function render()
    {
        $this->categories = Category::all();
        $this->product = Product::findOrFail($this->product_id)->first();
        $product_subcategory_id =  $this->product->product_subcategory_id;
        $this->product_similar_subcategory = Product::where('product_subcategory_id',$product_subcategory_id)->get();
        return view('livewire.users.view-single-product-component')->layout('layouts.user');
    }
}
