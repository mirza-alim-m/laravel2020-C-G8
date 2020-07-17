@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    TAMBAH PS
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/ps/create" enctype="multipart/form-data">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label>Ps</label>
                            <input name="ps_perhari" class="form-control" placeholder="Masukan Ps Perhari"></input>

                             @if($errors->has('ps_perhari'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_perhari')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Ps Overtime</label>
                            <input name="ps_overtime" class="form-control" placeholder="Masukan Ps Overtime"></input>

                             @if($errors->has('ps_overtime'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_overtime')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="ps_foto" class="form-control"></input>

                             @if($errors->has('ps_foto'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_foto')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>PDF</label>
                            <input type="file" name="ps_pdf" class="form-control"></input>

                             @if($errors->has('ps_pdf'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_pdf')}}
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
