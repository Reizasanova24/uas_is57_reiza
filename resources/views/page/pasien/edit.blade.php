@extends('layouts.master')

@section('title', 'Form Edit Pasien')
@section('navpasien', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Pasien</h1>
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
                            <form method="post" action="/pasien/{{$pasien->id}}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nik</label>
                                        <input type="text" value="{{$pasien->nik}}" name="nik" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Pasien</label>
                                        <input type="text" value="{{$pasien->nm_pasien}}" name="nama" class="form-control" id="exampleInputPassword1">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                                        <select name="jk" class="form-control" id="">
                                        <option value="{{$pasien->jk}}">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <input type="text" value="{{$pasien->alamat}}" name="alamat" class="form-control" id="exampleInputPassword1">
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Lahir</label>
                                            <input type="date" value="{{$pasien->tgl_lahir}}" name="tgl" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputPassword1">No Hp</label>
                                            <input type="number" value="{{$pasien->hp}}" name="hp" class="form-control" id="exampleInputPassword1">
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
