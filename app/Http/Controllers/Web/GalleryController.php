<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $categories = GalleryCategory::active()->withCount('activeGalleries')->get();
        
        $query = Gallery::active()->ordered();
        
        if ($request->has('category') && $request->category) {
            $query->where('category_id', $request->category);
        }
        
        $galleries = $query->paginate(12);
        
        return view('web.gallery', compact('galleries', 'categories'));
    }
}
