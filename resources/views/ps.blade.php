@extends('layouts.template')
@section('container')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <p>Cari Data Kendaraan :</p>
	<form action="/ps/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Ps .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

	<br/>
                <a href="/ps/tambah" class="btn btn-primary">Tambah</a>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Kendaraan</h5>
                            </div>
                            <table class="table">
                                  <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Ps Perhari</th>
                                    <th scope="col">Ps Overtime</th>
                                    <th scope="col">Opsi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($data_ps as $ps)
		                              <tr>
			                               <td>{{ $ps->ps_perhari }}</td>
			                               <td>{{ $ps->ps_overtime }}</td>
			                               <td>
                                        <a href="/ps/{{ $ps->id }}/detail" class="btn btn-primary">Detail</a>
    				                            <a href="/ps/{{ $ps->id }}/edit" class="btn btn-warning">Edit</a>
    				                            <a href="/ps/{{ $ps->id }}/delete" class="btn btn-danger">Hapus</a>
			                               </td>
		                              </tr>
		                              @endforeach

                                  </tbody>
                            </table>
                            <br/>
	                Halaman : {{ $data_ps->currentPage() }} <br/>
	            Jumlah Data : {{ $data_ps->total() }} <br/>
	       Data Per Halaman : {{ $data_ps->perPage() }} <br/>


	           {{ $data_ps->links() }}
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

































