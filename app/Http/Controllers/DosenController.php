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
}
