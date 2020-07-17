@extends('layouts.template')
@section('container')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
           Detail PS
        </div>
        <div class="card-body">
            <a href="/ps" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            <form method="post" action="/ps/{{$ps->id}}" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <div class="card" style="width: 30rem;">
                  <img src="{{ asset('/storage/gambar/'.$ps->ps_foto) }}" class="card-img-top w-50" alt="...">
                  <div class="card-body">
                    <p class="card-text">{{ $ps->ps_perhari }}</p>
                    <p class="card-text">{{ $ps->ps_overtime }}</p>
                    <a href="{{ asset('/storage/pdf/'.$ps->ps_pdf) }}">{{ $ps->ps_pdf }}</a>
                  </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection