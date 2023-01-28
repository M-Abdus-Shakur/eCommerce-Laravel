<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategoriesComponent extends Component
{
    public $category_name;
    public function addcategory(){
        $this->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Category::create([
            'category_name' => $this->category_name,
            'slug' => str()->slug($this->category_name),
        ]);
        session()->flash('success','Category Added Successfully');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-categories-component');
    }

}
