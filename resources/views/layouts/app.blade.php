<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Aspirasi Warga')</title>
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS via Vite -->
    @vite('resources/css/app.css')
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen flex flex-col font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo/Brand -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-700 bg-clip-text text-transparent">
                        <i class="fas fa-comment-dots mr-2"></i>Aspirasi Warga
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center">
                        <i class="fas fa-home mr-2"></i> Home
                    </a>
                    <a href="/aspirasi/create" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Aspirasi
                    </a>
                    <a href="/aspirasi" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center">
                        <i class="fas fa-list-ul mr-2"></i> Daftar Aspirasi
                    </a>
                    <a href="/peta" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center">
                        <i class="fas fa-map-marked-alt mr-2"></i> Peta Aspirasi
                    </a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Contact
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none transition duration-300" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="/" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                <a href="/aspirasi/create" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    <i class="fas fa-plus-circle mr-2"></i> Tambah Aspirasi
                </a>
                <a href="/aspirasi" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    <i class="fas fa-list-ul mr-2"></i> Daftar Aspirasi
                </a>
                <a href="/peta" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    <i class="fas fa-map-marked-alt mr-2"></i> Peta Aspirasi
                </a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    <i class="fas fa-envelope mr-2"></i> Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-6 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-sm md:text-base">
                        <i class="fas fa-map-marker-alt mr-2"></i> Jl. Contoh No. 123, Kota Kita
                    </p>
                    <p class="text-sm md:text-base">
                        <i class="fas fa-phone-alt mr-2"></i> (021) 1234-5678
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-white hover:text-blue-200 transition duration-300 text-xl">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-200 transition duration-300 text-xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-200 transition duration-300 text-xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="mt-6 text-center text-sm">
                <p>&copy; 2025 Aspirasi Warga. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    
    <!-- Mobile menu toggle script -->
    <script>
        document.querySelector('[aria-controls="mobile-menu"]').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
    
    @stack('scripts')
</body>
</html>