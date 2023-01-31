<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class CreateSubCategoriesComponent extends Component
{
    public $subcategory_name, $category_id, $categories;
    public function addsubcategory()
    {
        $this->validate([
            'subcategory_name' => 'required|unique:subcategories',
        ]);

        $category_name = Category::findOrFail($this->category_id)->category_name;
        Subcategory::create([
            'subcategory_name' => $this->subcategory_name,
            'category_id' => $this->category_id,
            'category_name' => $category_name,
            'slug' => str()->slug($this->subcategory_name),
        ]);
        Category::findOrFail($this->category_id)->increment('subcategory_count', 1);

        session()->flash('success', 'Subcategory Added Successfully');
        $this->reset();
    }

    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.create-sub-categories-component');
    }
}
