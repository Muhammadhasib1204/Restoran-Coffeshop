@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Penilaian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Penilaian</li>
        <li class="breadcrumb-item"><a href="{{ route('Penilaian') }}"></a>Penilaian</li>
        <li class="breadcrumb-item active">Ubah Data Penilaian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatePenilaian', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_menu" class="form-label">Nama Menu</label>
          <select id="id_menu" class="form-control" name="id_menu" required>
              <option value="">-- Select --</option>
              @foreach ($data_menu as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_menu ? 'selected' : '' }}>{{ $row->nama_menu}}
              @endforeach
          </select>
        </div>
          <div class="col-12">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $data->rating }}" required>
          </div>
          <div class="col-12">
            <label for="komentar" class="form-label">Komentar</label>
            <input type="text" class="form-control" id="komentar" name="komentar" value="{{ $data->komentar }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection