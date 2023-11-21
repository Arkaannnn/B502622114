<?php

namespace App\Http\Controllers; //package

use Illuminate\Http\Request;

class DosenController extends Controller //class
{
    //
    public function index(){
        $a = 7; //$variable
        $b = 3;
        $c = $a*$b;
        return "<h1>Hasil Perkalian : " . $c . "</h1>"; //+ = .
    }

    public function biodata(){
    	$Nama = "Arkaan Hilmi Suharsoyo";
        $Alamat = "Tuban";
        $Umur = 19;
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['Nama' => $Nama , 'Alamat' => $Alamat , 'Umur' => $Umur]);


    }
    public function showjam($jam){ //Parameter function berupa primitif dan data type
    	return "<h2>Sekarang Jam : " . $jam . "<h2>";
    }

    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return " Anda telah mengisikan <br>Nama : " . $nama . ", Alamat : " . $alamat . ", NRP : " . $nrp . "<br>" . $request;
    }
}
