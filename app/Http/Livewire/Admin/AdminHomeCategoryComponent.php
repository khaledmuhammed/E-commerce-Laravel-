<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\HomeCategory;

class AdminHomeCategoryComponent extends Component
{
    public $selected_categories = [];
    public $no_of_products;

    public function mount()
    {
        $home_category = HomeCategory::find(1);
        // The explode function in PHP allows us to break a string into smaller text with each break occurring at the same symbol.
        $this->selected_categories = explode(",", $home_category->sel_categories);
        $this->no_of_products = $home_category->no_of_products;
    }

    public function updateHomeCategory()
    {
        $home_category = HomeCategory::find(1);

        $home_category->sel_categories = implode(",", $this->selected_categories);
        $home_category->no_of_products =  $this->no_of_products;
        $home_category->save();
        session()->flash('message','HomeCategory has been Updated Successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-home-category-component',['categories' => $categories])->layout('layouts.base');
    }
}
