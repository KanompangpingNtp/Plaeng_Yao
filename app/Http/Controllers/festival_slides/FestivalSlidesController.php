<?php

namespace App\Http\Controllers\festival_slides;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FestivalSlidesController extends Controller
{
    public function FestivalSlidesPage()
    {
        return view('pages.festival_slides.pages');
    }
}
