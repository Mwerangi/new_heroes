<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->ordered()->paginate(12);
        
        return view('web.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->ordered()
            ->take(3)
            ->get();
        
        return view('web.services.show', compact('service', 'relatedServices'));
    }
}
