<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    
}
public function simpan()
{
	$jadwal_matakuliah = new jadwal_matakuliah();
	$jadwal_matakuliah->mahasiswa_id = '4';
	$jadwal_matakuliah->ruangan_id = '2';
	$jadwal_matakuliah->dosen_matakuliah_id = '3';
	$jadwal_matakuliah->save();
	return "Data Jadwal Matakuliah telah disimpan";
}
public function jadwalku() {
    $jadwal = jadwal_matakuliah::all();  //untuk menampilkan semua data 
    foreach ($jadwal as $arul) {  //panggilnya pakai foreach
    echo "Nama Mahasiswa :" .$arul->mahasiswa->nama;
    echo "<br>";
    echo "ID Dosen :" .$arul->dosen_matakuliah_id;
    echo "<br>";
    echo " Berada Di Kelas :" .$arul->ruangan->title;
}
}
}