@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit pelanggan
                </div>
                <div class="card-body">
                    <a href="/pelanggan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                  

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
                </div>
            </div>
        </div>
@endsection

