@extends('layouts.master')

@section('title', 'Form Edit Ubm')
@section('navpasien', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Ubm</h1>
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
                            <form method="post" action="/ubm/{{$ubm->id}}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pasien</label>
                                        <select name="nama" class="form-control">
                                            <option value="{{$ubm->pasiens_id}}">-Pilih Pasien-</option>
                                            @foreach ($pasien as $item)
                                                <option value="{{$item->id}}">{{$item->nm_pasien}}</option>  
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Konseling</label>
                                        <input type="text" value="{{$ubm->konseling}}" name="konseling" class="form-control" id="exampleInputPassword1">
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Car</label>
                                        <input type="text" value="{{$ubm->car}}" name="car" class="form-control" id="exampleInputPassword1">
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Rujuk Ubm</label>
                                            <input type="text" value="{{$ubm->rujuk_ubm}}" name="rujuk_ubm" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputPassword1">Kondisi</label>
                                            <input type="text" value="{{$ubm->kondisi}}" name="kondisi" class="form-control" id="exampleInputPassword1">
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
