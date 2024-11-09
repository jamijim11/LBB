<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SLSU-BC LEARNING COMMONS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Content Wrapper -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Dashboard Header -->
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">{{ __("Welcome back!")  }}{{Auth::user()->name}}</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">{{ __("You're logged in!") }} {{Auth::user()->name}}</p>
                        </div>
                        <!-- User Avatar or Icon -->
                        <div class="w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12c2.5 0 5-1.5 5-3s-2.5-3-5-3-5 1.5-5 3 2.5 3 5 3zM12 13c-4 0-6 2-6 4v1h12v-1c0-2-2-4-6-4z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Stats and Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-blue-100 dark:bg-blue-900 rounded-lg shadow-lg p-6">
                            <div class="flex items-center space-x-4">
                                <div class="text-white bg-blue-500 p-4 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7 7 7-7m-7 7V4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Books Overview</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Quick access to all your book details.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-green-100 dark:bg-green-900 rounded-lg shadow-lg p-6">
                            <div class="flex items-center space-x-4">
                                <div class="text-white bg-green-500 p-4 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7v10m0 0l3-3m-3 3l-3-3"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-900 dark:text-gray-100">User Activity</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Keep track of your users' activity.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-yellow-100 dark:bg-yellow-900 rounded-lg shadow-lg p-6">
                            <div class="flex items-center space-x-4">
                                <div class="text-white bg-yellow-500 p-4 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6h6v6M5 12l7-7 7 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Reports</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Generate insights about your data.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="mt-12 text-center">
                        <p class="text-lg text-gray-600 dark:text-gray-400">
                            Use this dashboard to manage your content and monitor activity. All data is updated in real-time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
