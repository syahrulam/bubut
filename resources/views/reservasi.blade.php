@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Daftar Reservasi
                </h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Reservasi</th>
                                <th>No WA</th>
                                <th>Alamat</th>
                                <th>Jasa</th>                              
                                <th>Estimasi</th>
                                <th>keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>  
                            @foreach($reservasi as $reservasi)                
                            <tr>
                                <td>{{$reservasi->id}}</td>
                                <td>{{$reservasi->nama}}</td>
                                <td>{{$reservasi->no_wa}}</td>
                                <td>{{$reservasi->alamat}}</td>
                                <td>{{$reservasi->jasa}}</td>
                                <td>{{$reservasi->estimasi}}</td>
                                <td>{{$reservasi->keterangan}}</td>
                             
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