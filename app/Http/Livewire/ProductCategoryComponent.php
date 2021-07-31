<?php

namespace App\Http\Livewire;

use Livewire\Component;

// this for the category page
class ProductCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.product-category-component')->layout('layouts.base');
    }
}
