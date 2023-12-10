<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class unggasController extends Controller
{
	public function indexunggas()
	{
    	// mengambil data dari table nilaikuliah (semua)
		// $nilaikuliah = DB::table('')->get();
        $unggas = DB::table('unggas')
        // -> orderBy ('ID', 'desc')
        -> get();


    	// mengirim data nilaikuliah ke view index
		return view('indexunggas',['unggas' => $unggas]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambahunggas()
	{
		// memanggil view tambah
		return view('tambahunggas');

	}

	// method untuk insert data ke table nilaikuliah
	public function storedata(Request $request)
	{

        $tersedia = $request->tersedia;

    // Ubah nilai sesuai pilihan dropdown
        $tersediaValue = ($tersedia == 'Y') ? 'Y' : 'N';

		// insert data ke table nilaikuliah
		DB::table('unggas')->insert([
			'namaunggas' => $request-> namaunggas,
			'jumlahunggas' => $request-> jumlahunggas,
			'tersedia' => $request-> tersedia
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/unggas');

	}
}
