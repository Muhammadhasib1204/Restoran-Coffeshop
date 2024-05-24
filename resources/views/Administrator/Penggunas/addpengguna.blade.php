@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pengguna</li>
        <li class="breadcrumb-item"><a href="{{ route('Pengguna') }}"></a>Data Pengguna</li>
        <li class="breadcrumb-item active">Tambah Data Pengguna</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPengguna') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="col-12">
            <label for="id_admin" class="form-label">Nama Admin</label>
              <select id="id_admin" class="form-control" name="id_admin" required>
                <option value="">-- Select --</option>
                  @foreach ($data_admin as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_admin }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
          <label for="id_pemilik" class="form-label">Nama Pemilik</label>
            <select id="id_pemilik" class="form-control" name="id_pemilik" required>
              <option value="">-- Select --</option>
                @foreach ($data_pemilik as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_pemilik }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
          <label for="id_customer" class="form-label">Customer</label>
            <select id="id_customer" class="form-control" name="id_customer" required>
              <option value="">-- Select --</option>
                @foreach ($data_customer as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_customer }}</option>
                @endforeach
            </select>
        </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right"style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection