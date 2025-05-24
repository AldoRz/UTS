@extends('layouts.app')

@section('title', 'Tambah Aspirasi')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header Section with Gradient -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-8 text-center sm:text-left">
                    <h1 class="text-3xl font-bold text-white">Form Tambah Aspirasi</h1>
                    <p class="mt-2 text-blue-100">Sampaikan aspirasi Anda untuk kemajuan bersama</p>
                </div>

                <!-- Form Container -->
                <div class="px-6 py-8 sm:p-10">
                    <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-8">
                        @csrf

                        <!-- Judul Field -->
                        <div class="space-y-2">
                            <label for="judul" class="block text-sm font-semibold text-gray-700">Judul Aspirasi</label>
                            <div class="relative">
                                <input type="text" id="judul" name="judul"
                                    class="block w-full px-5 py-3 text-base border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-150"
                                    placeholder="Masukkan judul aspirasi" required>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500">Contoh: "Perbaikan Jalan Rusak di RT 05"</p>
                        </div>

                        <!-- Lokasi Field -->
                        <div class="space-y-2">
                            <label for="lokasi" class="block text-sm font-semibold text-gray-700">Lokasi</label>
                            <div class="relative">
                                <input type="text" id="lokasi" name="lokasi"
                                    class="block w-full px-5 py-3 text-base border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-150"
                                    placeholder="Masukkan lokasi lengkap" required>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500">Contoh: "Jalan Merdeka No. 10, Kelurahan Bahagia"</p>
                        </div>

                        <!-- Isi Aspirasi -->
                        <div class="space-y-2">
                            <label for="isi" class="block text-sm font-semibold text-gray-700">Isi Aspirasi</label>
                            <textarea id="isi" name="isi" rows="6"
                                class="block w-full px-5 py-3 text-base border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-150"
                                placeholder="Jelaskan aspirasi Anda secara detail" required></textarea>
                            <p class="text-xs text-gray-500">Deskripsikan dengan jelas dan lengkap termasuk solusi yang Anda
                                usulkan</p>
                        </div>

                        <!-- File Upload -->

                        <div class="space-y-3">
                            <label for="gambar" class="block text-sm font-semibold text-gray-700">Dokumen
                                Pendukung</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-gray-300 border-dashed rounded-2xl bg-gray-50 hover:bg-gray-100 transition duration-200">
                                <div class="space-y-3 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="flex flex-col sm:flex-row items-center justify-center text-sm text-gray-600">
                                        <label for="gambar"
                                            class="relative cursor-pointer rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                            <span>Upload file</span>
                                            <input id="gambar" name="gambar" type="file" class="sr-only"
                                                accept="image/*" required>
                                        </label>
                                        <p class="mt-1 sm:mt-0 sm:ml-1">atau drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF maksimal 5MB</p>
                                    <div id="preview" class="mt-2 hidden">
                                        <img id="previewImage" class="max-h-40 mx-auto rounded-lg border border-gray-200">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-6">
                            <button type="submit"
                                class="w-full flex justify-center items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-xl shadow-md text-white bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Kirim Aspirasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Preview gambar sebelum upload
        document.getElementById('gambar').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            const previewImage = document.getElementById('previewImage');

            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    preview.classList.remove('hidden');
                }

                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
    @if ($errors->has('gambar'))
        <p class="mt-2 text-sm text-red-600">{{ $errors->first('gambar') }}</p>
    @endif
@endsection
