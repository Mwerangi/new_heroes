@extends('admin.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stat Cards -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">New Inquiries</p>
                <p class="text-3xl font-bold text-blue-600">{{ $stats['new_inquiries'] }}</p>
            </div>
            <div class="bg-blue-100 rounded-full p-3">
                <i class="fas fa-envelope text-blue-600 text-2xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Services</p>
                <p class="text-3xl font-bold text-green-600">{{ $stats['total_services'] }}</p>
            </div>
            <div class="bg-green-100 rounded-full p-3">
                <i class="fas fa-briefcase text-green-600 text-2xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Published Posts</p>
                <p class="text-3xl font-bold text-purple-600">{{ $stats['published_posts'] }}</p>
            </div>
            <div class="bg-purple-100 rounded-full p-3">
                <i class="fas fa-blog text-purple-600 text-2xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Gallery Images</p>
                <p class="text-3xl font-bold text-yellow-600">{{ $stats['gallery_images'] }}</p>
            </div>
            <div class="bg-yellow-100 rounded-full p-3">
                <i class="fas fa-images text-yellow-600 text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Inquiries -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold">Recent Inquiries</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                @forelse($recentInquiries as $inquiry)
                    <div class="flex items-start justify-between pb-4 border-b last:border-0">
                        <div class="flex-1">
                            <h4 class="font-semibold">{{ $inquiry->full_name }}</h4>
                            <p class="text-sm text-gray-600">{{ $inquiry->email }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $inquiry->created_at->diffForHumans() }}</p>
                        </div>
                        <span class="px-3 py-1 text-xs rounded-full {{ $inquiry->status === 'new' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ ucfirst($inquiry->status) }}
                        </span>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">No inquiries yet</p>
                @endforelse
            </div>
            @if($recentInquiries->count() > 0)
                <a href="{{ route('admin.inquiries.index') }}" class="block text-center text-blue-600 hover:text-blue-800 mt-4">
                    View All Inquiries <i class="fas fa-arrow-right ml-1"></i>
                </a>
            @endif
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold">Recent Activity</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                @forelse($recentActivities as $activity)
                    <div class="flex items-start pb-4 border-b last:border-0">
                        <div class="bg-gray-100 rounded-full p-2 mr-3">
                            <i class="fas fa-history text-gray-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm">
                                <span class="font-semibold">{{ $activity->user?->name ?? 'System' }}</span>
                                {{ $activity->description }}
                            </p>
                            <p class="text-xs text-gray-500 mt-1">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">No recent activity</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
