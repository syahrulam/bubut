@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Pemesan
                </h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Barang</th>
                                <th>Alamat</th>
                                <th>No WA</th>
                                <th>Estimasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                      
                        @foreach ($pesanan as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->nama}}</td>
                                <td>{{$c->pesanan}}</td>
                                <td>{{$c->alamat}}</td>
                                <td>{{$c->no_wa}}</td>
                                <td>{{ \Carbon\Carbon::parse($c->estimasi)->format('Y-m-d')}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection