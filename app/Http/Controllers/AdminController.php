<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|string',
            'role' => 'required',
        ]);

        return redirect()->back()->with('success', 'Admin berhasil ditambahkan!');
    }
}
