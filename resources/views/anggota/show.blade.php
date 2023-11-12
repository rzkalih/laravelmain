@extends('master')
@section('title', 'anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Anggota</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $anggotum->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="kode_anggota">Kode Anggota</label>
                                <input type="text" class="form-control" name="kode" id="kode_anggota" placeholder="Masukan kode" value="{{ $anggotum->kode }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" value="{{ $anggotum->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jk">jenis kelamin</label>
                                <input type="text" class="form-control" name="jk" id="jk" placeholder="" value="{{ $anggotum->jk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="" value="{{ $anggotum->jurusan }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>No. Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $anggotum->tlp }}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat" disabled>{{ $anggotum->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/anggota"><button type="submit" class="btn btn-primary">Kembali</button></a>
                        </div>
                        <!-- /.content -->

                    </div>
                    @endsection