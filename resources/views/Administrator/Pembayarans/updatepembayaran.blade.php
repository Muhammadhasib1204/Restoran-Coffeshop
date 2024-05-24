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
          <label for="id_pemesanan" class="form-label">Id Pesanan</label>
          <select id="id_pemesanan" class="form-control" name="id_pemesanan" required>
              <option value="">-- Select --</option>
              @foreach ($data_pesanan as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id ? 'selected' : '' }}>{{ $row->id}}
              @endforeach
          </select>
        </div>
          <div class="col-12">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" value="{{ $data->metode_pembayaran }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection