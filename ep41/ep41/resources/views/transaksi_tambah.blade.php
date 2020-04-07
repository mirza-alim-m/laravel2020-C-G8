@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    TAMBAH TRANSAKSI
                </div>
                <div class="card-body">
                    <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/transaksi/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Perhari</label>
                            <input type="text" name="ps_perhari" class="form-control" placeholder="Masukan Pelanggan ID">
 
                            @if($errors->has('ps_perhari'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_perhari')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Overtime</label>
                            <input name="ps_overtime" class="form-control" placeholder="Masukan Sopir ID"></textarea>
 
                             @if($errors->has('ps_overtime'))
                                <div class="text-danger">
                                    {{ $errors->first('ps_overtime')}}
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