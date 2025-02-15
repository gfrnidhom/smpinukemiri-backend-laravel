<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $title = 'Kontak Kami | SMPN 2 Purwosari';
        return view('frontend.contact.contact-view', compact([
            'title',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'no_telp' => 'required'
        ]);

        $form = [
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'message' => $request->message
        ];

        Message::create($form);
        Alert::success('Sukses', 'Pesan Berhasil dikirim.!');
        return redirect()->back();
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
