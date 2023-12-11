<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kodesoalAAController extends Controller
{
    public function indexAA()
    {
        // Mengambil data dari table chat (semua)
        $chat = DB::table('chat')->get();

        // Mengirim data chat ke view indexAA
        return view('indexAA', ['chat' => $chat]);
    }

    // Method untuk insert data ke table chat
    public function store(Request $request)
    {
        // Insert data ke table chat
        DB::table('chat')->insert([
            'id' => $request->id,
            'pesan' => $request->pesan,
        ]);

        // Alihkan halaman ke halaman chat
        return redirect('/chat');
    }

    // Method untuk edit data chat
    public function edit($id)
    {
        // Mengambil data chat berdasarkan id yang dipilih
        $chat = DB::table('chat')->where('id', $id)->get();

        // Passing data chat yang didapat ke view edit.blade.php
        return view('edit', ['chat' => $chat]);
    }

    // Update data chat
    public function update(Request $request)
    {
        // Update data chat
        DB::table('chat')->where('id', $request->id)->update([
            'id' => $request->id,
            'pesan' => $request->pesan,
        ]);

        // Alihkan halaman ke halaman chat
        return redirect('/chat');
    }

    public function tambahchat()
	{
		// memanggil view tambah
		return view('tambahchat');

	}

    public function view($id)
    {
        // Mengambil data chat berdasarkan id
        $chat = DB::table('chat')->where('id', $id)->first();

        // Mengirim data chat ke view tampilkan.blade.php
        return view('view', ['chat' => $chat]);
    }
}
