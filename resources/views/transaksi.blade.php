@extends('layouts.template')
@section('container')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <p>Cari Data Transaksi :</p>
	<form action="/transaksi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Transaksi .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>
                <a href="/transaksi/tambah" class="btn btn-primary">Tambah</a>
                <div class="row">
                    <div class="col-16">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Transaksi</h5>
                            </div>
                            <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                    <th> ID</th>
		                              	<th>Tarif Perhari</th>
			                              <th>Tarif Perminggu</th>
                                      <th scope="col">Opsi</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($transaksi as $tr)
	                                	<tr>
                                    <td>{{ $tr->transaksi_id }}</td>
			                              <td><a href="/transaksi/detail/{{$tr->transaksi_id}}">{{ $tr->ps_perhari }}</a></td>
			                              <td>{{ $tr->ps_overtime }}</td>
		                                	<td>
			                              	<a href="/transaksi/edit/{{$tr->transaksi_id}}" class="btn btn-warning">Edit</a>
			                                	<a href="/transaksi/hapus/{{ $tr->transaksi_id }}" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
		                                    	</td>
		                                      </tr>
	                                     	@endforeach
                                  </tbody>
                            </table>
                            <br/>
	                Halaman : {{ $transaksi->currentPage() }} <br/>
	            Jumlah Data : {{ $transaksi->total() }} <br/>
	       Data Per Halaman : {{ $transaksi->perPage() }} <br/>
 
 
	           {{ $transaksi->links() }}
                        </div>
                        
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
@endsection