@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pemesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pemesanan</li>
        <li class="breadcrumb-item"><a href="{{ route('Pemesanan') }}"></a>Data Pemesanan</li>
        <li class="breadcrumb-item active">Tambah Data Pemesanan</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPemesanan') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_customer" class="form-label">Nama Customer</label>
              <select id="id_customer" class="form-control" name="id_customer" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_customer as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_customer}}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="id_menu" class="form-label">Nama Menu</label>
              <select id="id_menu" class="form-control" name="id_menu" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_menu as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_menu}}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
            <input type="text" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" required>
          </div>
          <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection