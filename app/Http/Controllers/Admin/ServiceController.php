<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->paginate(20);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:services,slug',
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        // Handle checkboxes explicitly
        $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service = Service::create($validated);
        
        ActivityLog::log('created', "Created service: {$service->title}", Service::class, $service->id);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        // Handle checkboxes explicitly (unchecked checkboxes don't send values)
        $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        // Handle image upload - only update if new file uploaded
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        } else {
            // Don't overwrite existing image with null
            unset($validated['image']);
        }

        $service->update($validated);
        
        ActivityLog::log('updated', "Updated service: {$service->title}", Service::class, $service->id);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $title = $service->title;
        $service->delete();
        
        ActivityLog::log('deleted', "Deleted service: {$title}", Service::class, $service->id);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'services' => 'required|array',
            'services.*.id' => 'required|exists:services,id',
            'services.*.order' => 'required|integer',
        ]);

        foreach ($request->services as $serviceData) {
            Service::where('id', $serviceData['id'])->update(['order' => $serviceData['order']]);
        }

        return response()->json(['success' => true]);
    }
}
