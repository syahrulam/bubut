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
                @foreach ($getAkun as $p)
                    <form action="/akun/{id}/edit-akun" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" required="required" class="form-control" name="name"
                                value="{{ $p->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" required="required" class="form-control" name="email"
                                value="{{ $p->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" required="required" class="form-control" name="password"
                                value="{{ $p->password }}">
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