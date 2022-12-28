@extends('_layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <body>
        <div class="main-content">

            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
                style="min-height: 600px; background-image: url(https://www.hin.id/storage/news/Gracious/Gracious%20-%20Gajah%20Oling%204.png); background-size: 40%; background-position: center bottom;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-7 col-md-10">
                            @foreach ($allWisata as $wisata)
                                <h1 class="display-2 text-white">{{ $wisata->nama_wisata }}</h1>
                                <p class="text-white mt-0 mb-5">This is your read more page. qwertyuiop asdfg hjkl zxcv bnm
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                        <div class="card card-profile shadow">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            </div>
                            <div class="card-body pt-0 pt-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="{{ asset('storage/images') }}/{{ $wisata->gambar }}"
                                            class="card-profile-image">
                                    </a>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">About</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    {{ $wisata->artikel }}
                                </p>
                                @endforeach
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <a href="{{ route('wisata') }}" button type="submit" class="btn btn-primary">
                                            Kembali
                                        </a>
                                    </div>
                                </div>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
@endsection
