@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pembayaran</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pembayaran</li>
        <li class="breadcrumb-item"><a href="{{ route('Pembayaran') }}"></a>Data Pembayaran</li>
        <li class="breadcrumb-item active">Tambah Data Pembayaran</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPembayaran') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_pemesanan" class="form-label">Id Pesanan</label>
              <select id="id_pemesanan" class="form-control" name="id_pemesanan" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_pesanan as $row)
                    <option value="{{ $row->id }}">{{ $row->id}}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection