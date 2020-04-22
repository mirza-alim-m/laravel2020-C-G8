@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Transaksi
                </div>
                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($pelanggan as $p)
                    <form method="post" action="/pelanggan/{{$p->pelanggan_id}}">
@method('put')
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label>Pelanggan Nama</label>
                            <input name="pelanggan_nama" class="form-control"value="{{ $p->pelanggan_nama }}" placeholder="Masukan "></input>
 
                        </div>

                        <div class="form-group">
                            <label>Alamat Pelanggan</label>
                            <input name="pelanggan_alamat" class="form-control" value="{{ $p->pelanggan_alamat }}"placeholder="Masukan "></input>
                        </div>
                        <div class="form-group">
                            <label>Pelanggan Telpon</label>
                            <input name="pelanggan_telpon" class="form-control" value="{{ $p->pelanggan_telpon }}"placeholder="Masukan Overtime"></input>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

