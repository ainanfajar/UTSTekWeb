@extends('layout.template')

@section('tittle', 'Detail Data Guru')

@section('content')
<!-- Profile Image -->
<div class="card card-primary card-outline col-md-6">
    <div class="card-body box-profile">
        <h3 class="profile-username">NIP : {{$guru -> nip}}</h3>
        <h3 class="profile-username">Nama : {{$guru -> nama_guru}}</h3>
        <h3 class="profile-username">Mata Pelajaran :{{$guru -> mapel}}</h3>
        <br>

        <a href="/guru" class="btn btn-primary btn-block"><b>Kembali</b></a>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection