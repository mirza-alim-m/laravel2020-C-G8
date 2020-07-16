@extends('layouts.template')
@section('container')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <p>Cari Data Pelanggan :</p>
	<form action="/pelanggan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pelanggann .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
<<<<<<< HEAD

=======
		
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
	<br/>
                <a href="/pelanggan/tambah" class="btn btn-primary">Tambah</a>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Pelanggan</h5>
                            </div>
                            <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
<<<<<<< HEAD
=======
                                      <th scope="col">ID</th>
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                                      <th scope="col">Nama Pelanggan</th>
                                      <th scope="col">Alamat Pelanggan</th>
                                      <th scope="col">No Pelanggan</th>
                                      <th scope="col">Opsi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
<<<<<<< HEAD
                                  @foreach($data_pelanggan as $pelanggan)
                            <tr>
                                <td>{{ $pelanggan->pelanggan_nama }}</td>
                                <td>{{ $pelanggan->pelanggan_alamat }}</td>
                                <td>{{ $pelanggan->pelanggan_telpon }}</td>
                                <td>
                                    <a href="/pelanggan/{{ $pelanggan->id }}/detail" class="btn btn-primary">Detail</a>
                                    <a href="/pelanggan/{{ $pelanggan->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/pelanggan/{{ $pelanggan->id }}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Hapus?')">Hapus</a>
=======
                                  @foreach($pelanggan as $p)
                            <tr>
                                <td>{{ $p->pelanggan_id }}</td>
                                <td><a href="/pelanggan/detail/{{ $p->pelanggan_id }}">{{ $p->pelanggan_nama }}</a></td>
                                <td>{{ $p->pelanggan_alamat }}</td>
                                <td>{{ $p->pelanggan_telpon }}</td>
                                <td>
                                    <a href="/pelanggan/edit/{{ $p->pelanggan_id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pelanggan/hapus/{{ $p->pelanggan_id }}" class="btn btn-danger" onclick="return confirm('Apakah Yakin Hapus?')">Hapus</a>
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                                </td>
                            </tr>
                            @endforeach
                                  </tbody>
                            </table>
                            <br/>
<<<<<<< HEAD
	                Halaman : {{ $data_pelanggan->currentPage() }} <br/>
	            Jumlah Data : {{ $data_pelanggan->total() }} <br/>
	       Data Per Halaman : {{ $data_pelanggan->perPage() }} <br/>


	           {{ $data_pelanggan->links() }}

                        </div>

=======
	                Halaman : {{ $pelanggan->currentPage() }} <br/>
	            Jumlah Data : {{ $pelanggan->total() }} <br/>
	       Data Per Halaman : {{ $pelanggan->perPage() }} <br/>
 
 
	           {{ $pelanggan->links() }}
                        
                        </div>
                        
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
