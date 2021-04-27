@extends('layout.userhome')

@section('tittle', 'Home')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">Sistem Informasi</h3>
                            <h3 class="widget-user-username">Taman Kanak-kanak</h3>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{url('/images/tk.png')}}" alt="tk">
                        </div>
                        <div class="card-footer">
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content mb-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-text">Tentang</h5>

                            <p class="card-text">
                                Website yang bertujuan memberikan informasi mengenai Taman Kanak-kanak (TK) yang berada di Kota Tangerang, Cipondoh, Kenanga
                            </p>

                            <section class="content">

                                <!-- Default box -->
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    Kepala Sekolah
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="lead"><b>Fatmawati</b></h2>
                                                            <p class="text-muted text-sm"> "Belajar merupakan hal yang harus dilakukan sejak dini."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    Guru TK
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="lead"><b>Ida</b></h2>
                                                            <p class="text-muted text-sm"> "Sangat senang mengajar anak kecil, karena mereka sangat antusias untuk belajar" </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    Siswa
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="lead"><b>Bagas Saputra</b></h2>
                                                            <p class="text-muted text-sm">"Belajar di TK Kenanga sangat seru!"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                            </section>
                            <!-- /.content -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection