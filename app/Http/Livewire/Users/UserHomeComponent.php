<?php

namespace App\Http\Livewire\Users;

use App\Models\Category;
use Livewire\Component;

class UserHomeComponent extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.users.user-home-component')->layout('layouts.user');
    }
}
