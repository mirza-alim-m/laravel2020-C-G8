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
<<<<<<< HEAD
                    <form method="post" action="/pelanggan/{{$pelanggan->id}}/update" enctype="multipart/form-data" >

=======
                    @foreach($pelanggan as $p)
                    <form method="post" action="/pelanggan/{{$p->pelanggan_id}}">
@method('put')
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label>Pelanggan Nama</label>
<<<<<<< HEAD
                            <input name="pelanggan_nama" class="form-control"value="{{ $pelanggan->pelanggan_nama }}" placeholder="Masukan "></input>

=======
                            <input name="pelanggan_nama" class="form-control"value="{{ $p->pelanggan_nama }}" placeholder="Masukan "></input>
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                        </div>

                        <div class="form-group">
                            <label>Alamat Pelanggan</label>
<<<<<<< HEAD
                            <input name="pelanggan_alamat" class="form-control" value="{{ $pelanggan->pelanggan_alamat }}"placeholder="Masukan "></input>
                        
                        </div>

                        <div class="form-group">
                            <label>Pelanggan Telpon</label>
                            <input name="pelanggan_telpon" class="form-control" value="{{ $pelanggan->pelanggan_telpon }}"placeholder="Masukan Overtime"></input>
                        
                        </div>
                        
                        <div class="form-group">
                            <label for="pelanggan_foto">Pelanggan Foto</label>
                            @if($pelanggan->pelanggan_foto != NULL)
                            <div>
                                <input type="hidden" name="oldgambar" value="{{ $pelanggan->pelanggan_foto }}">
                                <img src="{{ asset('storage/gambar/'.$pelanggan->pelanggan_foto) }}" class="w-25">
                            </div>
                            @endif
                            <input type="file" name="pelanggan_foto" class="form-control-file form-control-sm" id="pelanggan_foto"/>
                        </div>

                        <div class="form-group">
                            <label for="pelanggan_pdf">Pelanggan PDF</label>
                            @if($pelanggan->pelanggan_pdf != NULL)
                            <div>
                                <input type="hidden" name="oldpdf" value="{{ $pelanggan->pelanggan_pdf }}">
                                <a href="{{ asset('/storage/pdf/'.$pelanggan->pelanggan_pdf) }}">{{ $pelanggan->pelanggan_pdf }}</a>
                            </div>
                            @endif

                            <input type="file" name="pelanggan_pdf" class="form-control-file form-control-sm"
                              id="pelanggan_pdf" />
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
            
=======
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
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                </div>
            </div>
        </div>
@endsection

