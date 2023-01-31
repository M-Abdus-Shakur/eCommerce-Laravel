<?php

namespace App\Http\Livewire;

use App\Models\Subcategory;
use Livewire\Component;

class CreateSubCategoriesComponent extends Component
{

    public function addsubcategory()
    {
        Subcategory::create([

        ]);
    }

    public function render()
    {
        return view('livewire.create-sub-categories-component');
    }
}
