<?php
// app/Http/Controllers/AspirasiFileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AspirasiFileController extends Controller
{
    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'lokasi' => 'required|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('aspirasi', 'public');
        }

        $validated['user'] = 'Anonim';
        $validated['waktu'] = now()->toDateTimeString();

        $data = [];
        if (Storage::exists('aspirasi.json')) {
            $data = json_decode(Storage::get('aspirasi.json'), true);
        }

        $data[] = $validated;

        Storage::put('aspirasi.json', json_encode($data, JSON_PRETTY_PRINT));

        return redirect('/')->with('success', 'Aspirasi berhasil disimpan!');
    }

    public function index()
    {
        $aspirasi = [];
        if (Storage::exists('aspirasi.json')) {
            $aspirasi = json_decode(Storage::get('aspirasi.json'), true);
        }

        return view('aspirasi.index', compact('aspirasi'));
    }
    public function map()
{
    $aspirasi = [];
    if (Storage::exists('aspirasi.json')) {
        $aspirasi = json_decode(Storage::get('aspirasi.json'), true);
    }

    return view('aspirasi.map', compact('aspirasi'));
}

}

