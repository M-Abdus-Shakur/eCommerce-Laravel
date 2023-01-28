<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class AllCategoriesComponent extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.all-categories-component');
    }
}
