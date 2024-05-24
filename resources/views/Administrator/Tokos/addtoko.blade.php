@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Toko</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Toko</li>
        <li class="breadcrumb-item"><a href="{{ route('Toko') }}"></a>Data Toko</li>
        <li class="breadcrumb-item active">Tambah Data Toko</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertToko') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_pemilik" class="form-label">Nama Pemilik</label>
              <select id="id_pemilik" class="form-control" name="id_pemilik" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_pemilik as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_pemilik }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="jenis_toko" class="form-label">Jenis Toko</label>
            <input type="text" class="form-control" id="jenis_toko" name="jenis_toko" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection