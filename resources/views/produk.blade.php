@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Produk
                </h6>
                <div class="ml-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Produk
                </button>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                           
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($getProduk as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->namabarang}}</td>
                                <td>{{$a->deskripsi}}</td>
                                <td>{{$a->kategori}}</td>
                                <td>{{$a->harga}}</td>
                                <td>
                                    <img src="{{asset('storage/image/produk/'.$a->image)}}" alt="Gambar" width="50px" height="50px">
                                </td>
                                <td>
                                    <a href="/produk/{{ $a->id }}/edit-produk"
                                        class="btn btn-outline-warning btn-sm">Edit</a>
                                    <a href="/produk/{{ $a->id }}/hapus-produk"
                                        class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>                         
                            @endforeach
                        </tbody>
                    </table>


                      <!-- Insert Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                            </div>
                            <div class="modal-body">
                                <form action="/store" method="post"  enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="namabarang" placeholder="Nama Produk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="deskripsi" placeholder="Deskripsi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori" required>
                                        <option selected disabled value="">--- Pilih Kategori ---</option>
                                        <option value="Sparepat Motor">Sparepat Motor</option>
                                        <option value="Sparepat Mobil">Sparepat Mobil</option>
                                        <option value="Pernak-Pernik Rumah">Pernak-Pernik Rumah</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" placeholder="Harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="image" required>
                                </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>







                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>


@endsection