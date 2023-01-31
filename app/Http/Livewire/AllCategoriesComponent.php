<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class AllCategoriesComponent extends Component
{
    public $categories;

    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        session()->flash('success', 'Category Deleted Successfully');
    }

    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.all-categories-component');
    }
}
