<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\User;
use App\Models\Gallery;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'new_inquiries' => Inquiry::new()->count(),
            'total_services' => Service::count(),
            'published_posts' => BlogPost::published()->count(),
            'total_users' => User::where('is_active', true)->count(),
            'gallery_images' => Gallery::active()->count(),
        ];

        $recentInquiries = Inquiry::with('assignedUser')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $recentActivities = ActivityLog::with('user')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentActivities'));
    }
}
