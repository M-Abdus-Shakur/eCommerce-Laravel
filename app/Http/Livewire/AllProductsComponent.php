<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AllProductsComponent extends Component
{
    public $products;

    public function deleteProduct($id, $product_category_id, $product_subcategory_id)
    {
        $product_image = Product::findOrFail($id)->product_image;
        if (File::exists(public_path('storage/' . $product_image))) {
            unlink('storage/' . $product_image);
        }
        Product::where('id', $id)->delete();
        Category::findOrFail($product_category_id)->decrement('product_count', 1);
        Subcategory::findOrFail($product_subcategory_id)->decrement('product_count', 1);
        session()->flash('success', 'Product Deleted Successfully');
    }

    public function render()
    {
        $this->products = Product::get();
        return view('livewire.all-products-component');
    }
}
