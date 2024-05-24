@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Pemesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pemesanan</li>
        <li class="breadcrumb-item"><a href="{{ route('Pemesanan') }}"></a>Pemesanan</li>
        <li class="breadcrumb-item active">Ubah Data Pemesanan</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatePemesanan', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_customer" class="form-label">Nama Customer</label>
          <select id="id_customer" class="form-control" name="id_customer" required>
              <option value="">-- Select --</option>
              @foreach ($data_customer as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_customer ? 'selected' : '' }}>{{ $row->nama_customer}}
              @endforeach
          </select>
        </div>
        <div class="col-12">
          <label for="id_menu" class="form-label">Nama Menu</label>
          <select id="id_menu" class="form-control" name="id_menu" required>
              <option value="">-- Select --</option>
              @foreach ($data_menu as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_menu ? 'selected' : '' }}>{{ $row->nama_menu }}
              @endforeach
          </select>
        </div>
          <div class="col-12">
            <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
            <input type="text" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $data->jumlah_pesanan }}" required>
          </div>
          <div class="col-12">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection