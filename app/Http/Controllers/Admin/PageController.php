<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('title')->paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    public function edit(Page $page)
    {
        $page->load('sections');
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        // Handle checkbox for page active status
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        $page->update($validated);
        
        ActivityLog::log('updated', "Updated page: {$page->title}", Page::class, $page->id);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }
}
