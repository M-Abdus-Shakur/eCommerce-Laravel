<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class AllSubCategoriesComponent extends Component
{
    public $subcategories;

    public function deleteSubcategory($id,$category_id)
    {
         Subcategory::where('id', $id)->delete();
         Category::findOrFail($category_id)->decrement('subcategory_count',1);
         session()->flash('success', 'Subcategory Deleted Successfully');
    }
    public function render()
    {
        $this->subcategories = Subcategory::orderBy('created_at', 'desc')->get();
        return view('livewire.all-sub-categories-component');
    }
}
