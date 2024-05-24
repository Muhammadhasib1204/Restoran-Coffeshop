@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Menu</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item"><a href="{{ route('Menu') }}"></a>Data Menu</li>
        <li class="breadcrumb-item active">Tambah Data Menu</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertMenu') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_toko" class="form-label">Id Toko</label>
              <select id="id_toko" class="form-control" name="id_toko" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_toko as $row)
                    <option value="{{ $row->id }}">{{ $row->id}}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="nama_menu" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
          </div>
          <div class="col-12">
            <label for="jenis_menu" class="form-label">Jenis Menu</label>
            <input type="text" class="form-control" id="jenis_menu" name="jenis_menu" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection