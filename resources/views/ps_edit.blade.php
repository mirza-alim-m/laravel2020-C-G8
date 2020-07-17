@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit PS
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/ps/{{$ps->id}}/update" enctype="multipart/form-data" >

                        {{ csrf_field() }}
                        
                        <input  type="hidden" name="id" class="form-control" value="{{ $ps->id }}">
                        
                        <div class="form-group">
                            <label>Ps Perhari</label>
                            <input  type="text" name="ps_perhari" class="form-control" value="{{ $ps->ps_perhari }}">
                        </div>


                        <div class="form-group">
                            <label>Ps Overtimae</label>
                            <input type="text" name="ps_overtime" value="{{ $ps->ps_overtime }}"class="form-control" placeholder="Masukan Alamat Sopir"></input>
                        </div>

                        <div class="form-group">
                            <label for="ps_foto">PS Foto</label>
                            @if($ps->ps_foto != NULL)
                            <div>
                                <input type="hidden" name="oldgambar" value="{{ $ps->ps_foto }}">
                                <img src="{{ asset('storage/gambar/'.$ps->ps_foto) }}" class="w-25">
                            </div>
                            @endif
                            <input type="file" name="ps_foto" class="form-control-file form-control-sm" id="ps_foto"/>
                        </div>

                        <div class="form-group">
                            <label for="ps_pdf">PS PDF</label>
                            @if($ps->ps_pdf != NULL)
                            <div>
                                <input type="hidden" name="oldpdf" value="{{ $ps->ps_pdf }}">
                                <a href="{{ asset('/storage/pdf/'.$ps->ps_pdf) }}">{{ $ps->ps_pdf }}</a>
                            </div>
                            @endif

                            <input type="file" name="ps_pdf" class="form-control-file form-control-sm"
                              id="ps_pdf" />
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection
