<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class UpdateCategoriesComponent extends Component
{
    public $category_name, $category_id;

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $category = Category::findOrFail($this->category_id);
        $this->category_name = $category->category_name;
    }

    public function cancelUpdate()
    {
        return redirect(route('admin-dashboard-allcategories'));
    }

    public function updateCategory()
    {
        $category = Category::findOrFail($this->category_id);
        $category->category_name = $this->category_name;
        $category->slug = str()->slug($this->category_name);
        $category->save();
        return redirect(route('admin-dashboard-allcategories'))->with('success','updated successfully');
    }

    public function render()
    {
        return view('livewire.update-categories-component');
    }
}
