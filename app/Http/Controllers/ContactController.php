<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'message' => 'required|min:10',
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
