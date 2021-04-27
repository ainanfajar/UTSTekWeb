@extends('layout.template')

@section('tittle', 'Edit Data Siswa')

@section('content')


<form action="/siswa/update/{{ $siswa->id_siswa }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label>NIS</label>
                                <input name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{$siswa->nis}}">
                                <div class="invalid-feedback">
                                    @error('nis')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" value="{{$siswa->nama_siswa}}">
                                <div class="invalid-feedback">
                                    @error('nama_siswa')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kelas</label>
                                <input name="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{$siswa->kelas}}">
                                <div class="invalid-feedback">
                                    @error('kelas')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{$siswa->jk}}">
                                <div class="invalid-feedback">
                                    @error('jk')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection