@extends('layouts.template')
@section('container')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Transaksi
                </div>
                <div class="card-body">
                    <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                  

                    <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                    <th> ID</th>
		                              	<th>Tarif Perhari</th>
			                              <th>Tarif Perminggu</th>
                                   

                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($transaksi as $tr)
	                                	<tr>
                                    <td>{{ $tr->transaksi_id }}</td>
			                              <td><a href="/transaksi/detail/{{$tr->transaksi_id}}">{{ $tr->ps_perhari }}</a></td>
			                              <td>{{ $tr->ps_overtime }}</td>
		                                	
		                                      </tr>
	                                     	@endforeach
                                  </tbody>
                            </table>
                </div>
            </div>
        </div>
@endsection

