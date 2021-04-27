@extends('layout.template')

@section('tittle', 'Data Siswa')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active">Siswa</li>
</ol>
@endsection

@section('content')
<a href="/siswa/add" class="btn btn-primary btn-sm">Tambah</a><br><br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Success!</h4>
    {{ session('pesan') }}
</div>
@endif
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($siswa as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_siswa}}</td>
                <td>{{$data->jk}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->kelas}}</td>
                <td>
                    <a href="/siswa/detail/{{$data->id_siswa}}" class="btn btn-success">Detail</a>
                    <a href="/siswa/edit/{{$data->id_siswa}}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_siswa}}">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach($siswa as $data)
<div class="modal fade" id="delete{{$data->id_siswa}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">{{$data->nama_siswa}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <a href="/siswa/delete/{{$data->id_siswa}}" type="button" class="btn btn-outline-light">Yes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@endsection