@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    <div class="bg-gradient-to-br from-blue-50 to-indigo-100">
        <!-- Hero Section -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="pt-6 pb-8 md:pt-10 md:pb-12 lg:pt-12 lg:pb-16">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="sm:text-center lg:text-left lg:w-1/2">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Selamat Datang di</span>
                            <span class="block text-blue-600">Aspirasi Warga</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Wadah partisipasi masyarakat untuk membangun lingkungan yang lebih baik melalui aspirasi dan
                            kolaborasi.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('aspirasi.create') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 transition duration-300 transform hover:-translate-y-1">
                                    Kirim Aspirasi
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('aspirasi.index') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10 transition duration-300">
                                    Lihat Aspirasi
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Elemen di samping kanan dengan gambar -->
                    <div class="lg:w-1/2 mt-8 lg:mt-0 lg:pl-12 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <!-- Gambar dari screenshot -->
                            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                <div class="text-3xl font-bold text-gray-800 mb-4 leading-tight">

                                </div>
                                <div class="mt-6 flex justify-center space-x-4">
                                    <div class="text-center">
                                        <div class="mx-auto h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                                            <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                        </div>
                                        <div class="mt-2 font-medium text-gray-900">Aspirasi</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="mx-auto h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                                            <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div class="mt-2 font-medium text-gray-900">Laporan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten tambahan bisa diletakkan di sini -->

@endsection