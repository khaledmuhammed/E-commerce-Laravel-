<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class HomeComponenet extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        // taking only latest 8 products from database
        $latest_products = Product::orderBy('created_at','DESC')->get()->take(8);

        $home_categories = HomeCategory::find(1);
        $home_categories_Ids = explode(',', $home_categories->sel_categories);
        $categories = Category::whereIn('id', $home_categories_Ids)->get();
        $no_of_products = $home_categories->no_of_products;

        $sale_products = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $sale_date = Sale::find(1);

        return view('livewire.home-componenet',['sliders' => $sliders,'latest_products' => $latest_products,
        'categories' => $categories, 'no_of_products' => $no_of_products, 'sale_products' => $sale_products, 'sale_date' => $sale_date])->layout('layouts.base');
    }
}
