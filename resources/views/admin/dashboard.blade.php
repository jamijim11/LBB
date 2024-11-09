@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex">
    <!-- Sidebar -->
    <div class="bg-gray-800 w-64 space-y-6 py-7 px-2">
        <div class="text-white text-2xl font-semibold mb-8 text-center">
            Library Dashboard
        </div>
        <nav>
            <ul class="space-y-2">
                <li><a href="{{ route('admin.dashboard') }}" class="text-white hover:bg-gray-700 p-2 rounded-md block">Dashboard</a></li>
                <li><a href="{{ route('books.index') }}" class="text-white hover:bg-gray-700 p-2 rounded-md block">Manage Books</a></li>
                <li><a href="{{ route('users.index') }}" class="text-white hover:bg-gray-700 p-2 rounded-md block">Manage Users</a></li>
                <li><a href="#" class="text-white hover:bg-gray-700 p-2 rounded-md block">Settings</a></li>
                <li><a href="#" class="text-white hover:bg-gray-700 p-2 rounded-md block">Logout</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Total Books -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700">Total Books</h3>
                <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalBooks }}</p>
            </div>

            <!-- Card 2: Total Users -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                <p class="text-3xl font-bold text-green-600 mt-2">{{ $totalUsers }}</p>
            </div>

            <!-- Card 3: Pending Requests -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700">Pending Requests</h3>
                <p class="text-3xl font-bold text-yellow-600 mt-2">{{ $pendingRequests }}</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white p-6 rounded-lg shadow-md mt-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Recent Activity</h3>
            <ul class="space-y-3">
                <li class="flex justify-between items-center">
                    <span class="text-gray-600">User John Doe borrowed "The Great Gatsby"</span>
                    <span class="text-sm text-gray-500">2 hours ago</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-600">User Jane Doe registered</span>
                    <span class="text-sm text-gray-500">1 day ago</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-600">"1984" was added to the catalog</span>
                    <span class="text-sm text-gray-500">3 days ago</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection