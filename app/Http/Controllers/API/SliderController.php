<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Example of fetching the latest 3 services for the slider
        $slider = Slider::orderBy('id', 'DESC')->get();
        return response()->json($slider);  // Return the data as JSON
    }
}
