@extends('layout.template')

@section('tittle', 'Edit Data Guru')

@section('content')


<form action="/guru/update/{{ $guru->id_guru }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label>NIP</label>
                                <input name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{$guru->nip}}">
                                <div class="invalid-feedback">
                                    @error('nip')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" value="{{$guru->nama_guru}}">
                                <div class="invalid-feedback">
                                    @error('nama_guru')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input name="mapel" class="form-control @error('mapel') is-invalid @enderror" value="{{$guru->mapel}}">
                                <div class="invalid-feedback">
                                    @error('mapel')
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