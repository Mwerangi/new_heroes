<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::active()->ordered()->paginate(12);
        
        return view('web.testimonials', compact('testimonials'));
    }
}
