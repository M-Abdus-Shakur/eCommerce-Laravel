<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class UpdateSubCategoriesComponent extends Component
{
    public $subcategory_name, $subcategory_id;

    public function mount($subcategory_id)
    {
        $this->subcategory_id = $subcategory_id;
        $subcategory = Subcategory::findOrFail($this->subcategory_id);
        $this->subcategory_name = $subcategory->subcategory_name;
    }

    public function updatesubcategory()
    {
        $subcategory = Subcategory::findOrFail($this->subcategory_id);
        $subcategory->subcategory_name = $this->subcategory_name;
        $subcategory->slug = str()->slug($this->subcategory_name);
        $subcategory->save();
        return redirect(route('admin-dashboard-allsubcategories'))->with('success','subcategory updated successfully');
    }

    public function render()
    {
        return view('livewire.update-sub-categories-component');
    }
}
