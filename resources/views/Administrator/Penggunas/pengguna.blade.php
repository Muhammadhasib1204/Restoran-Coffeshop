@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Data Pengguna/User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Data Pengguna</li>
        <li class="breadcrumb-item active">Data Pengguna</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addPengguna') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfPengguna') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Nama Admin</th>
                                <th>Nama Pemilik</th>
                                <th>Nama Customer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->nama}}</td>
                                    <td>{{ $row->email}}</td>
                                    <td>{{ $row->password}}</td>
                                    <td>{{ $row->admin->nama_admin}}</td>
                                    <td>{{ $row->customer->nama_customer}}</td>
                                    <td>{{ $row->pemilik->nama_pemilik}}</td>
                                    <td>
                                         <a class='btn-edit' href="{{ route('updatePengguna', $row->id) }}">
                               Edit
                        </a> | 
                        <a class='btn-delete' href="{{ route('deletePengguna', $row->id) }}">
                            Hapus
                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection