<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PelangganController extends Controller
{
       public function pelanggan()
       {
        $pelanggan = DB::table('pelanggan')->paginate(10);
           return view('pelanggan', ['pelanggan' => $pelanggan]);
       }

       public function tambah()
{
 
	// memanggil view tambah
	return view('pelanggan_tambah');
 
}

public function edit($pelanggan_id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$transaksi = DB::table('pelanggan')->where('pelanggan_id', $pelanggan_id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pelanggan_edit',['transaksi' => $transaksi]);
 
}

public function update(Request $request)
{
	// update data pegawai
	DB::table('pelanggan')->where('id',$request->id)->update([
		'id' => $request->id,
		'ps_perhari' => $request->ps_perhari,
        'ps_overtime' => $request->ps_overtime
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
} 

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pelanggan')->insert([
		'pelanggan_nama' => $request->pelanggan_nama,
		'pelanggan_alamat' => $request->pelanggan_alamat,
		'pelanggan_telpon' => $request->pelanggan_telpon
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pelanggan');
 
}

      
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pelanggan = DB::table('pelanggan')
		->where('pelanggan_nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('pelanggan',['pelanggan' => $pelanggan]);
 
	}
    

       
}