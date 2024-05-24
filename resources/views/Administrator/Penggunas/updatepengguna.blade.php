@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pengguna</li>
        <li class="breadcrumb-item"><a href="{{ route('Pengguna') }}"></a>Pengguna</li>
        <li class="breadcrumb-item active">Ubah Data Pengguna</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatePengguna', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ $data->password }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection