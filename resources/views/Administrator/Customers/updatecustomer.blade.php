@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Customer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Customer</li>
        <li class="breadcrumb-item"><a href="{{ route('Customer') }}"></a>Customer</li>
        <li class="breadcrumb-item active">Ubah Data Customer</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateCustomer', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_customer" class="form-label">Nama Customer</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="{{ $data->nama_customer }}" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" required>
          </div>
          <div class="col-12">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" required>
          </div>
           <div class="col-12">
            <label for="no_telp" class="form-label">No Telpon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection