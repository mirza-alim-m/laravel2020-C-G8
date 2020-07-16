@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
<<<<<<< HEAD
                   Detail Pelanggan
=======
                   Edit pelanggan
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                </div>
                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
<<<<<<< HEAD

                    <form method="post" action="/pelanggan/{{$pelanggan->id}}" enctype="multipart/form-data" >

                        {{ csrf_field() }}
                        <div class="card" style="width: 30rem;">
                            <img src="{{ asset('/storage/gambar/'.$pelanggan->pelanggan_foto) }}" class="card-img-top w-50" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{ $pelanggan->pelanggan_nama }}</p>
                              <p class="card-text">{{ $pelanggan->pelanggan_alamat }}</p>
                              <p class="card-text">{{ $pelanggan->pelanggan_telpon }}</p>
                              <a href="{{ asset('/storage/pdf/'.$pelanggan->pelanggan_pdf) }}">{{ $pelanggan->pelanggan_pdf }}</a>
                            </div>
                          </div>

                    </form>

=======
                  

                    <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                    <th> ID</th>
			                              <th>Pelanggan Nama</th>
			                              <th>Pelanggan Alamat</th>
			                              <th>Pelanggan Telpon</th>
                                   

                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($pelanggan as $p)
	                                	<tr>
                                    <td>{{ $p->pelanggan_id }}</td>
                                <td><a href="/pelanggan/detail/{{ $p->pelanggan_id }}">{{ $p->pelanggan_nama }}</a></td>
                                <td>{{ $p->pelanggan_alamat }}</td>
                                <td>{{ $p->pelanggan_telpon }}</td>
		                                	
		                                      </tr>
	                                     	@endforeach
                                  </tbody>
                            </table>
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                </div>
            </div>
        </div>
@endsection
<<<<<<< HEAD
=======

>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
