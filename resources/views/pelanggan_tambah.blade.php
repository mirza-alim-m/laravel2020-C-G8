@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    TAMBAH PELANGGAN
                </div>
                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
<<<<<<< HEAD

                    <form method="post" action="/pelanggan/create" enctype="multipart/form-data">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="pelanggan_nama" class="form-control" placeholder="Masukan Nama Pelanggan"></input>

=======
                    
                    <form method="post" action="/pelanggan/store">
 
                        {{ csrf_field() }}
 
                        
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="pelanggan_nama" class="form-control" placeholder="Masukan Nama Pelanggan"></input>
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                             @if($errors->has('pelanggan_nama'))
                                <div class="text-danger">
                                    {{ $errors->first('pelanggan_nama')}}
                                </div>
                            @endif
<<<<<<< HEAD

=======
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                        </div>

                        <div class="form-group">
                            <label>Alamat Pelanggan</label>
                            <input type="text" name="pelanggan_alamat" class="form-control" placeholder="Masukan Alamat Pelanggan"></input>
<<<<<<< HEAD

=======
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                             @if($errors->has('pelanggan_alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('pelanggan_alamat')}}
                                </div>
                            @endif
<<<<<<< HEAD

=======
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                        </div>

                        <div class="form-group">
                            <label>No Telpon Pelanggan</label>
                            <input type="text" name="pelanggan_telpon" class="form-control" placeholder="Masukan Nomor Telpon Pelanggan"></input>
<<<<<<< HEAD

=======
 
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                             @if($errors->has('pelanggan_telpon'))
                                <div class="text-danger">
                                    {{ $errors->first('pelanggan_telpon')}}
                                </div>
                            @endif
<<<<<<< HEAD

                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="pelanggan_foto" class="form-control"></input>

                             @if($errors->has('pelanggan_foto'))
                                <div class="text-danger">
                                    {{ $errors->first('pelanggan_foto')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>PDF</label>
                            <input type="file" name="pelanggan_pdf" class="form-control"></input>

                             @if($errors->has('pelanggan_pdf'))
                                <div class="text-danger">
                                    {{ $errors->first('pelanggan_pdf')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection
=======
 
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
