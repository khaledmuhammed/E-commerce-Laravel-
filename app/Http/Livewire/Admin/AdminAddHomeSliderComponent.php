<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;


class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount(){

        $this->status = 0;
    }

    public function addSlide(){
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $image_name = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('sliders',$image_name);
        $slider->image = $image_name;
        $slider->status = $this->status;
        $slider->title = $this->title;
        $slider->save();
        session()->flash('message','Slide has been Created Successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
