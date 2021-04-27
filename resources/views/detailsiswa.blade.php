@extends('layout.template')

@section('tittle', 'Detail Data Siswa')

@section('content')
<!-- Profile Image -->
<div class="card card-primary card-outline col-md-6">
    <div class="card-body box-profile">
        <h3 class="profile-username">NIP : {{$siswa -> nis}}</h3>
        <h3 class="profile-username">Nama : {{$siswa -> nama_siswa}}</h3>
        <h3 class="profile-username">Kelas : {{$siswa -> kelas}}</h3>
        <h3 class="profile-username">Jenis Kelamin : {{$siswa -> jk}}</h3>
        <br>

        <a href="/siswa" class="btn btn-primary btn-block"><b>Kembali</b></a>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection