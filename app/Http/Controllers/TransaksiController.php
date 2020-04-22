<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
       public function transaksi()
       {
          // mengambil data dari table pegawai
    	$transaksi = DB::table('ps')->paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('transaksi',['transaksi' => $transaksi]);

       }
       
       public function tambah()
       {
 
	      // memanggil view tambah
	      return view('transaksi_tambah');
 
        }

        public function store(Request $request)
        {
	// insert data ke table pegawai
	DB::table('ps')->insert([
		'id' => $request->id,
		'ps_perhari' => $request->ps_perhari,
        'ps_overtime' => $request->ps_overtime
        
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
 
         }
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$transaksi = DB::table('ps')->where('id', $id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('transaksi_edit',['transaksi' => $transaksi]);
 
}

public function update(Request $request)
{
	// update data pegawai
	DB::table('ps')->where('id',$request->id)->update([
		'id' => $request->id,
		'ps_perhari' => $request->ps_perhari,
        'ps_overtime' => $request->ps_overtime
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$transaksi = DB::table('ps')
		->where('ps_perhari','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('transaksi',['transaksi' => $transaksi]);
 
	}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('ps')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/sopir');
}

}