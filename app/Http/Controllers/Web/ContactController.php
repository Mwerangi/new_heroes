<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInformation::active()->orderBy('order')->get()->groupBy('group');
        
        return view('web.contact', compact('contactInfo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you can send email or save to database
        // For now, we'll just return success
        
        return back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
}
