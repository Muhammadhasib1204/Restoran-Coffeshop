@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pemilik</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pemilik</li>
        <li class="breadcrumb-item"><a href="{{ route('Pemilik') }}"></a>Data Pemilik</li>
        <li class="breadcrumb-item active">Tambah Data Pemilik</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Delete --}}
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('danger') }}
</div>
@endif
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPemilik') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="col-12">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
          </div>
          <div class="col-12">
            <label for="no_telp" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection