@extends('master')
@section('title', 'buku')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Peminjamam</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">peminjaman</li>
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
                            <h3 class="card-title">Form Peminjaman</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('peminjaman.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rak">Nama peminjaman</label>
                                    <select name="anggota_id" id="genre" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @forelse ($anggota as $key => $value )
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                        @empty
                                        <option disabled>--Data Masih Kosong--</option>
                                        @endforelse

                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="rak">Nama petugas</label>
                                        <select name="petugas_id" id="genre" class="form-control">
                                            <option disabled selected>--Pilih Salah Satu--</option>
                                            @forelse ($petugas as $key => $value )
                                            <option value="{{ $value->id }}">{{ $value->nama_petugas }}</option>
                                            @empty
                                            <option disabled>--Data Masih Kosong--</option>
                                            @endforelse

                                        </select>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="rak">Judul buku</label>
                                            <select name="buku_id" id="genre" class="form-control">
                                                <option disabled selected>--Pilih Salah Satu--</option>
                                                @forelse ($buku as $key => $value )
                                                <option value="{{ $value->id }}">{{ $value->judul }}</option>
                                                @empty
                                                <option disabled>--Data Masih Kosong--</option>
                                                @endforelse

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="penulis" id="penulis">tanggal peminjaman</label>
                                            <input class="form-control" type="date" name="tanggal_pinjam" id="penulis" placeholder="Masukan nama penulis">
                                        </div>
                                        <div class="form-group">
                                            <label for="penerbit" id="penerbit">tanggal kembali</label>
                                            <input class="form-control" type="date" name="tanggal_kembali" id="penerbit" placeholder="Masukan nama penerbit">
                                        </div>

                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" class=" btn-primary">Submit</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection

</html>