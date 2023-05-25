@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Produk
            </div>
            <div class="card-body">
                @foreach ($barang as $p)
                <form action="/produk/{id}/edit-produk-proses" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                    <div class="form-group">
                        <label for="namabarang">Nama Produk</label>
                        <input type="text" required="required" class="form-control" name="namabarang"
                            value="{{ $p->namabarang}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" required="required" class="form-control" name="deskripsi"
                            value="{{ $p->deskripsi }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" required="required" class="form-control" name="kategori"
                            value="{{ $p->kategori }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" required="required" class="form-control" name="harga"
                            value="{{ $p->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" required="required" class="form-control" name="image"
                            value="{{ $p->image }}">
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="text-align  : right !important;">
                            <input type="submit" name="Save" id="save" value="Simpan Data" class="btn btn-primary"
                                title="Simpan Data">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>


@endsection