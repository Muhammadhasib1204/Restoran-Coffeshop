@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Penilaian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Penilaian</li>
        <li class="breadcrumb-item"><a href="{{ route('Penilaian') }}"></a>Data Penilaian</li>
        <li class="breadcrumb-item active">Tambah Data Penilaian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPenilaian') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_menu" class="form-label">Id Menu</label>
              <select id="id_menu" class="form-control" name="id_menu" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_menu as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_menu}}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" required>
          </div>
          <div class="col-12">
            <label for="komentar" class="form-label">Komentar</label>
            <input type="text" class="form-control" id="komentar" name="komentar" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection