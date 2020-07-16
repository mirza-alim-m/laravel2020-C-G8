@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Ps
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/ps/{{$ps->id}}/update" enctype="multipart/form-data" >

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Ps ID</label>
                            <input  type="text" name="id" class="form-control" value="{{ $ps->id }}">
                        </div>
                        <div class="form-group">
                            <label>Ps Perhari</label>
                            <input  type="text" name="ps_perhari" class="form-control" value="{{ $ps->ps_perhari }}">
                        </div>


                        <div class="form-group">
                            <label>Ps Overtimae</label>
                            <input type="text" name="ps_overtime" value="{{ $ps->ps_overtime }}"class="form-control" placeholder="Masukan Alamat Sopir"></input>
                        </div>



                        <div class="form-group">
                            <label> Photo</label>
                            <input type="file" name="ps_foto" class="form-control" value="{{ $ps->ps_foto }}"placeholder="Masukan No SIM Sopir"></input>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection
