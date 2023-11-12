@extends('master')
@section('title', 'petugas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">petugas/li>
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
                            <h3 class="card-title">Form Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Rak</label>
                                <input class="form-control" type="text" name="id" id="id" placeholder="Masukan ID" value="{{ $rak->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_petugas">Nama rak</label>
                                <input class="form-control" type="text" name="nama_rak" id="nama_petugas" placeholder="Masukan Nama" value="{{ $rak->nama_rak }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jabatan_petugas">lokasi</label>
                                <input class="form-control" type="text" name="lokasi_rak" id="" placeholder="" value="{{ $rak->lokasi_rak }}" disabled>
                            </div>

                        </div>


                        <div class="card-footer">
                            <a href="/rak"><button type="submit" class="btn btn-primary">Kembali</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection

</html>