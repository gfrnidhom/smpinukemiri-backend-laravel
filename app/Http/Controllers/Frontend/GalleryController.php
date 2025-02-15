<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Galeri | SMPN 2 Purwosari';
        // $storagePath = public_path('storage');

        // // Ambil semua file dari folder dan subfolder
        // $files = File::allFiles($storagePath);

        // // Filter hanya file gambar
        // $gallery = collect($files)->filter(function ($file) {
        //     return in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif']);
        // });

        return view('frontend.gallery.gallery-view', compact([
            'title',
            // 'gallery',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
