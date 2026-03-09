<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        // Get home page content
        $page = Page::where('slug', 'home')->with('activeSections')->first();
        
        // Get featured services
        $featuredServices = Service::featured()->ordered()->take(6)->get();
        
        // Get testimonials
        $testimonials = Testimonial::active()->ordered()->take(6)->get();
        
        // Get gallery preview
        $galleryImages = Gallery::active()->ordered()->take(8)->get();
        
        // Get latest blog posts
        $latestPosts = BlogPost::published()->latest()->take(3)->get();
        
        return view('web.home', compact(
            'page',
            'featuredServices',
            'testimonials',
            'galleryImages',
            'latestPosts'
        ));
    }
}
