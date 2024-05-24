@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Toko</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Toko</li>
        <li class="breadcrumb-item"><a href="{{ route('Toko') }}"></a>Toko</li>
        <li class="breadcrumb-item active">Ubah Data Toko</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateToko', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_pemilik" class="form-label">Nama Pemilik</label>
          <select id="id_pemilik" class="form-control" name="id_pemilik" required>
              <option value="">-- Select --</option>
              @foreach ($data_pemilik as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_pemilik ? 'selected' : '' }}>{{ $row->nama_pemilik }}
              @endforeach
          </select>
        </div>
          <div class="col-12">
            <label for="jenis_toko" class="form-label">Jenis Toko</label>
            <input type="text" class="form-control" id="jenis_toko" name="jenis_toko" value="{{ $data->jenis_toko }}" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection