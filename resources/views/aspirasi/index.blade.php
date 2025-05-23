@extends('layouts.app')

@section('title', 'Daftar Aspirasi')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-blue-800 mb-3">Daftar Aspirasi Warga</h1>
        <p class="text-lg text-blue-600">Suara masyarakat untuk pembangunan yang lebih baik</p>
        <div class="mt-4 w-20 h-1 bg-blue-500 mx-auto rounded-full"></div>
    </div>

    @if(count($aspirasi) > 0)
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-1">
            @foreach($aspirasi as $a)
            <div class="relative bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-blue-100">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-xl font-bold text-gray-800">{{ $a['judul'] }}</h2>
                            <div class="flex items-center text-sm text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $a['lokasi'] }}
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-gray-600 mb-4 leading-relaxed">{{ $a['isi'] }}</p>
                    
                    @if(!empty($a['gambar']))
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $a['gambar']) }}" alt="Gambar Aspirasi" 
                             class="rounded-lg shadow-sm max-w-full h-auto border border-gray-200 transition-transform duration-300 hover:scale-105 cursor-zoom-in">
                    </div>
                    @endif
                    
                    <div class="mt-5 pt-4 border-t border-gray-100 flex justify-between items-center">
                        <span class="text-xs text-gray-500">Dikirim pada: {{ date('d M Y', strtotime($a['created_at'])) }}</span>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                            Lihat detail
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12 bg-blue-50 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-blue-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-medium text-gray-700 mb-2">Belum ada aspirasi</h3>
            <p class="text-gray-500 max-w-md mx-auto">Saat ini belum ada aspirasi yang dikirim. Jadilah yang pertama untuk menyampaikan pendapat Anda!</p>
            <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                Kirim Aspirasi
            </button>
        </div>
    @endif
    
    @if(count($aspirasi) > 0)
    <div class="mt-8 flex justify-center">
        <nav class="inline-flex rounded-md shadow">
            <a href="#" class="px-4 py-2 rounded-l-md border border-gray-300 bg-white text-blue-600 hover:bg-blue-50">
                Previous
            </a>
            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 hover:bg-blue-50">
                1
            </a>
            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-blue-600 hover:bg-blue-50">
                2
            </a>
            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500">
                3
            </a>
            <a href="#" class="px-4 py-2 rounded-r-md border border-gray-300 bg-white text-blue-600 hover:bg-blue-50">
                Next
            </a>
        </nav>
    </div>
    @endif
</div>
@endsection