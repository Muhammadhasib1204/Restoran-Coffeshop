@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Data Menu</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Data Menu</li>
        <li class="breadcrumb-item active">Data Menu</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addMenu') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfMenu') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Toko</th>
                                <th>Nama Menu</th>
                                <th>Jenis Menu</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->id_toko}}</td>
                                    <td>{{ $row->nama_menu}}</td>
                                    <td>{{ $row->jenis_menu}}</td>
                                    
                                    <td>
                                         <a class='btn-edit' href="{{ route('updateMenu', $row->id) }}">
                               Edit
                        </a> | 
                        <a class='btn-delete' href="{{ route('deleteMenu', $row->id) }}">
                            Hapus
                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5"><p class="text text-center">No results found.</p></td>
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