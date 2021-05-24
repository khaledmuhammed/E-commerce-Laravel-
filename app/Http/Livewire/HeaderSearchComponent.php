<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    // In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to.
    public function mount(){
        $this->product_cat = "All Category";
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-component',['categories' => $categories]);
    }
}
