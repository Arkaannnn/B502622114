<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaikuliahController extends Controller
{
	public function indexnilaikuliah()
	{
    	// mengambil data dari table nilaikuliah (semua)
		// $nilaikuliah = DB::table('')->get();
        $nilaikuliah = DB::table('nilaikuliah')
        // -> orderBy ('ID', 'desc')
        -> get();


    	// mengirim data nilaikuliah ke view index
		return view('indexnilaikuliah',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambahdata()
	{
		// memanggil view tambah
		return view('tambahdata');

	}

	// method untuk insert data ke table nilaikuliah
	public function storenilai(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}
}
