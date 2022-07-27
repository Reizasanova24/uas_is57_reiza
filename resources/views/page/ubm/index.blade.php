@extends('layouts.master')

@section('navubm','active')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">


                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}

                        <div class="" style="float: right">
                            <a href="/ubm/form" class="btn btn-sm btn-primary">Tambah Data UBM</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-nowrap table-sm text-center">
                            <tr>
                            <tr>
                                <th>NO</th>
                                <th>NAMA PASIEN</th>
                                <th>KONSELING</th>
                                <th>CAR</th>
                                <th>RUJUK UBM</th>
                                <th>KONDISI</th>
                                <th>ACTION</th>
                            </tr>
                            <tbody>
                                @forelse ($ubm as $item)
                                    <tr>
                                        <th scope="row">{{ $nomor++ }}</th>
                                        <td>{{ $item->pasiens->nm_pasien }}</td>
                                        <td>{{ $item->konseling }}</td>
                                        <td>{{ $item->car }}</td>
                                        <td>{{ $item->rujuk_ubm}}</td>
                                        <td>{{ $item->kondisi }}</td>
                                        <td>
                                            <a href="/ubm/edit/{{ $item->id }}"
                                                class="btn btn-success btn-sm">edit</a>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#modal-default{{ $item->id }}">
                                                hapus
                                            </button>

                                            {{-- Modal Hapus --}}
                                            <div class="modal fade" id="modal-default{{ $item->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Peringatan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin data Ubm <b>{{ $item->nm_pasien }}</b> ingin
                                                            dihapus?
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <form method="POST" action="/ubm/{{ $item->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-primary">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
    
@endsection