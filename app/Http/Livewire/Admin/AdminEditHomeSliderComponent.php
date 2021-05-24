<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditHomeSliderComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $new_image;
    public $status;
    public $slide_id;

    public function mount($slide_id){

        $slider = HomeSlider::find($slide_id);

        $this->slide_id = $slider->id;
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;

    }

    public function updateSlide()
    {
        $slider = HomeSlider::find($this->slide_id);

        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        if($this->new_image){
            $image_name = Carbon::now()->timestamp. '.' .$this->new_image->extension();
            $this->new_image->storeAs('sliders',$image_name);
            $slider->image = $image_name;
        }
        $slider->status = $this->status;
        $slider->title = $this->title;
        $slider->save();
        session()->flash('message','Slide has been Updated Successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
