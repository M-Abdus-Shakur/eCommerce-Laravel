<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class UpdateProductsComponent extends Component
{
    public $product_id, $product_name, $product_des, $price, $product_quantity, $product_image;

    use WithFileUploads;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $product = Product::findOrFail($this->product_id);

        $this->product_name = $product->product_name;
        $this->product_des = $product->product_des;
        $this->price = $product->price;
        $this->product_quantity = $product->product_quantity;
        $this->product_image = $product->product_image;
    }

    public function updateProduct()
    {
        $product = Product::findOrFail($this->product_id);

        $product->product_name = $this->product_name;
        $product->product_des = $this->product_des;
        $product->price = $this->price;
        $product->product_quantity = $this->product_quantity;

        if($this->product_image != $product->product_image){
            $image_path = $this->product_image->store('productImages','public');
            $product->product_image = $image_path;
        }

        $product->slug = str()->slug($this->product_name);
        $product->save();
        return redirect(route('admin-dashboard-allproducts'))->with('success','Product updated successfully');
    }

    public function render()
    {
        return view('livewire.update-products-component');
    }
}
