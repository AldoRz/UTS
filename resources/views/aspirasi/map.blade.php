@extends('layouts.app')

@section('title', 'Peta Aspirasi')

@section('content')
    <div class="max-w-1xl mx-auto p-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Peta Aspirasi Warga</h1>

        <div id="map" class="w-full h-[500px] rounded-lg shadow-md border border-gray-300"></div>

        <p class="mt-4 text-center text-gray-600 italic">
            Klik marker untuk melihat detail aspirasi.
        </p>
    </div>
    @push('scripts')
        <script>
            // Inisialisasi peta Leaflet
            const map = L.map('map').setView([-0.0263, 109.3425], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            let marker;
            map.on('click', function(e) {
                if (marker) map.removeLayer(marker);
                marker = L.marker(e.latlng).addTo(map);
            });
        </script>
    @endpush
@endsection
