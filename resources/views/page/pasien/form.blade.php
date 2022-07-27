@extends('layouts.master')

@section('title', 'Form Tambah Pasien')
@section('navpasien', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Tambah Pasien</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="/pasien/store" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIK</label>
                                        <input type="text" name="nik" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Pasien</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                                       <select name="jk" class="form-control" id="">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Lahir</label>
                                            <input type="date" name="tgl" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputPassword1">No Hp</label>
                                            <input type="number" name="hp" class="form-control" id="exampleInputPassword1">
                                        </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
