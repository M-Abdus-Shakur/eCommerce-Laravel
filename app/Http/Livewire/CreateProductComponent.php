<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProductComponent extends Component
{
    public $categories, $subcategories;
    public $product_name, $product_des, $price, $product_quantity, $product_subcategory_id, $product_category_id, $product_image;

    use WithFileUploads;

    public function addProduct()
    {
        $this->validate([
            'product_name' => 'required',
            'product_des' => 'required',
            'price' => 'required',
            'product_quantity' => 'required',
            'product_subcategory_id' => 'required',
            'product_category_id' => 'required',
            'product_image' => 'image|required|max:2048',
        ]);

        $image_path = $this->product_image->store('productImages','public');
        $category_name = Category::findOrFail($this->product_category_id)->category_name;
        $subcategory_name = Subcategory::findOrFail($this->product_subcategory_id)->subcategory_name;

        Product::create([
            'product_name' => $this->product_name,
            'product_des' => $this->product_des,
            'price' => $this->price,
            'product_quantity' => $this->product_quantity,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'product_subcategory_id' => $this->product_subcategory_id,
            'product_category_id' => $this->product_category_id,
            'product_image' => $image_path,
            'slug' => str()->slug($this->product_name),
        ]);

         Category::findOrFail($this->product_category_id)->increment('product_count', 1);
         Subcategory::findOrFail($this->product_subcategory_id)->increment('product_count', 1);

        session()->flash('success', 'Product Added Successfully');
        $this->reset();
    }

    public function render()
    {
        $this->categories = Category::get();
        $this->subcategories = Subcategory::get();
        return view('livewire.create-product-component');
    }
}
