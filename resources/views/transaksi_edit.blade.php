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
                    @foreach($transaksi as $tr)
                    <form method="post" action="/transaksi/{{$tr->transaksi_id}}">
                    @method('put')

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label>Rental Perhari</label>
                            <input name="ps_perhari" class="form-control"value="{{ $tr->ps_perhari }}" placeholder="Masukan Rental Perhari"></input>
 
                        </div>

                        <div class="form-group">
                            <label>PS Overtime</label>
                            <input name="ps_overtime" class="form-control" value="{{ $tr->ps_overtime }}"placeholder="Masukan Overtime"></input>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

