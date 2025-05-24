@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Hubungi Kami</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Kami siap membantu Anda. Hubungi tim kami melalui informasi kontak di bawah ini atau kirim pesan langsung melalui form.</p>
        <div class="mt-6 w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-10">
        <!-- Contact Information -->
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-700">Email</h3>
                            <p class="mt-1 text-gray-600">kontak@aspirasiwarga.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-700">Telepon</h3>
                            <p class="mt-1 text-gray-600">0812-3456-7890</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-700">Alamat Kantor</h3>
                            <p class="mt-1 text-gray-600">Jl. Aspirasi Warga No. 123<br>Kota Pontianak, Kalimantan Barat</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Jam Operasional</h2>
                <div class="space-y-4">
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-700">Senin - Jumat</span>
                        <span class="text-gray-600 font-medium">08:00 - 17:00</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-700">Sabtu</span>
                        <span class="text-gray-600 font-medium">09:00 - 15:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Minggu</span>
                        <span class="text-gray-600 font-medium">Libur</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
            <form>
                <div class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Masukkan nama Anda">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="email@contoh.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                        <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Apa yang ingin Anda tanyakan?">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                        <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Tulis pesan Anda disini..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 shadow-md transform hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>

   <!-- Map Section -->
<div class="bg-white py-12 sm:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Lokasi Kami di Pontianak</h2>
            <p class="mt-3 max-w-2xl mx-auto text-gray-500 sm:mt-4">
                Kantor Aspirasi Warga Kota Pontianak
            </p>
        </div>
        
        <!-- Google Maps Embed -->
        <div class="rounded-xl overflow-hidden shadow-xl border border-gray-200">
            <div class="aspect-w-16 aspect-h-9 w-full">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.857518481693!2d109.3303903147533!3d-0.02676973548686255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59c7f6aed6a9%3A0x4a9d60d0d8c6b0e!2sPontianak%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1621234567890!5m2!1sid!2sid" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-64 sm:h-80 md:h-96 lg:h-[450px]"
                ></iframe>
            </div>
            
            <div class="bg-gray-50 p-4 sm:p-6">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="mb-4 sm:mb-0">
                        <h3 class="text-lg font-medium text-gray-900">Kantor Aspirasi Warga Pontianak</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Jl. Ahmad Yani No.1, Pontianak Selatan<br>
                            Kota Pontianak, Kalimantan Barat 78121
                        </p>
                    </div>
                    <a 
                        href="https://maps.google.com/?q=-0.0267697,109.332579" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition-colors duration-300"
                    >
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection