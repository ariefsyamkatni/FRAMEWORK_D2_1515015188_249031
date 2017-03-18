<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
    {
    	return "matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'bahasa inggris';
    	$matakuliah->keterangan ='kgk ada';
    	$matakuliah->save();
    	return "data dengan title {$matakuliah->title} telah disimpan";
    }
}
