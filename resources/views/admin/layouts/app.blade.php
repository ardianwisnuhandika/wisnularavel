<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - GO WIZ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-primary text-white w-64 flex-shrink-0 hidden md:block">
            <div class="flex items-center justify-center h-16 border-b border-primary-700">
                <a href="/" class="flex items-center p-4">
                    <img src="{{ asset('images/logo revisi.png') }}" alt="GO WIZ" class="w-10 h-10 mr-2">
                    <span class="text-xl font-bold">GO WIZ Admin</span>
                </a>
            </div>
            <nav class="py-4">
                <ul>
                    <li>
                        <a href="{{ route('products.index') }}" class="flex items-center px-6 py-3 hover:bg-primary-700 transition-colors {{ request()->routeIs('products.*') ? 'bg-primary-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span>Produk</span>
                        </a>
                    </li>
                    <!-- Add more menu items here -->
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navbar -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between h-16 px-6">
                    <!-- Mobile menu button -->
                    <button type="button" class="md:hidden" id="sidebar-toggle">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    
                    <div class="flex items-center">
                        <h1 class="text-lg font-semibold md:hidden">GO WIZ Admin</h1>
                    </div>

                    <div class="flex items-center">
                        <div class="relative">
                            <div class="flex items-center space-x-4">
                                <span class="text-gray-600">{{ Auth::user()->name ?? 'Admin' }}</span>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-1 rounded-lg text-sm font-semibold">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 z-40 md:hidden hidden" id="mobile-sidebar-container">
                <div class="absolute inset-0 bg-gray-600 opacity-75" id="sidebar-backdrop"></div>
                <div class="absolute inset-y-0 left-0 w-64 bg-primary text-white flex flex-col" id="mobile-sidebar">
                    <div class="flex items-center justify-between h-16 border-b border-primary-700 px-6">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo revisi.png') }}" alt="GO WIZ" class="w-10 h-10 mr-2">
                            <span class="text-xl font-bold">GO WIZ Admin</span>
                        </a>
                        <button type="button" class="text-white" id="close-sidebar">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <nav class="py-4">
                        <ul>
                            <li>
                                <a href="{{ route('products.index') }}" class="flex items-center px-6 py-3 hover:bg-primary-700 transition-colors {{ request()->routeIs('products.*') ? 'bg-primary-700' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    <span>Produk</span>
                                </a>
                            </li>
                            <!-- Add more menu items here -->
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const mobileSidebarContainer = document.getElementById('mobile-sidebar-container');
            const closeSidebar = document.getElementById('close-sidebar');
            const sidebarBackdrop = document.getElementById('sidebar-backdrop');
            
            if (sidebarToggle && mobileSidebarContainer && closeSidebar && sidebarBackdrop) {
                sidebarToggle.addEventListener('click', function() {
                    mobileSidebarContainer.classList.remove('hidden');
                });
                
                closeSidebar.addEventListener('click', function() {
                    mobileSidebarContainer.classList.add('hidden');
                });
                
                sidebarBackdrop.addEventListener('click', function() {
                    mobileSidebarContainer.classList.add('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html> 