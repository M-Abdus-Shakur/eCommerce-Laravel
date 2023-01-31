<?php

namespace App\Http\Livewire;

use App\Models\Subcategory;
use Livewire\Component;

class AllSubCategoriesComponent extends Component
{
    public $subcategories;

    public function render()
    {
        $this->subcategories = Subcategory::orderBy('id', 'desc')->get();
        return view('livewire.all-sub-categories-component');
    }
}
