<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->paginate(20);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('testimonials', 'public');
        }

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('testimonials/logos', 'public');
        }

        $testimonial = Testimonial::create($validated);
        
        ActivityLog::log('created', "Created testimonial from: {$testimonial->client_name}", Testimonial::class, $testimonial->id);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('testimonials', 'public');
        }

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('testimonials/logos', 'public');
        }

        $testimonial->update($validated);
        
        ActivityLog::log('updated', "Updated testimonial from: {$testimonial->client_name}", Testimonial::class, $testimonial->id);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $name = $testimonial->client_name;
        $testimonial->delete();
        
        ActivityLog::log('deleted', "Deleted testimonial from: {$name}", Testimonial::class, $testimonial->id);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'testimonials' => 'required|array',
            'testimonials.*.id' => 'required|exists:testimonials,id',
            'testimonials.*.order' => 'required|integer',
        ]);

        foreach ($request->testimonials as $testimonialData) {
            Testimonial::where('id', $testimonialData['id'])->update(['order' => $testimonialData['order']]);
        }

        return response()->json(['success' => true]);
    }
}
