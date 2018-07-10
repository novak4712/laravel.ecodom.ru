<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.slider')) {
            $sliders = Slider::all();
            $data = [
                'title' => 'Слайдер главная',
                'sliders' => $sliders
            ];
            return view('admin.slider', $data);
        }
        abort(404);
    }
}
