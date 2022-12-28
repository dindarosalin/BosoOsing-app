@extends('_layouts.app')

@section('content')
    @if ($status == 'kosong')
        </br>
        <div class="container bg-light p-5" style="border-radius: 20px;">
            <form action="{{ route('translate') }}" method="GET">
                <div class="wrapper">
                    <div class="text-input">
                        <textarea spellcheck="false" class="from-text" placeholder="Enter text" name="keyword"></textarea>
                        <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation"></textarea>
                    </div>
                </div>
                <br>
                <div class="select">
                    <select class="select" name="bahasa">
                        <option selected disabled>Pilih Bahasa</option>
                        <option value="b_ind">Bahasa Indonesia</option>
                        <option value="b_osing">Bahasa Osing</option>
                    </select>
                </div>
                <button class="button-translate">Translate Text</button>
            </form>
        </div>
        </br>
    @else
        </br>
        <div class="container bg-light p-5" style="border-radius: 20px;">
            <form action="{{ route('translate') }}" method="GET">
                <div class="wrapper">
                    <div class="text-input">
                        <textarea spellcheck="false" class="from-text" placeholder="Masukkan Kata" name="keyword">
                            @if ($bahasa =='b_ind')
                                @foreach ($translate as $t)
                                {{ $t->kata_ind }}
                                @endforeach
                            @else
                                @foreach ($translate as $t)
                                {{ $t->kata_os }}
                                @endforeach
                            @endif
                        </textarea>
                        <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation">
                            @if ($bahasa == 'b_ind')
                                @foreach ($translate as $a)
                                    @foreach ($a->bahasa_osing as $item)
                                        {{ $item->kata_os }}, 
                                    @endforeach
                                @endforeach
                            @else
                                @foreach ($translate as $a)
                                    @foreach ($a->bahasa_indonesia as $item)
                                        {{ $item->kata_ind }}, 
                                    @endforeach
                                @endforeach
                            @endif
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="select">
                    <select class="select" name="bahasa">
                        <option selected disabled>Pilih Bahasa</option>
                        <option value="b_ind">Bahasa Indonesia</option>
                        <option value="b_osing">Bahasa Osing</option>
                    </select>
                </div>
                <button class="button-translate">Translate Text</button>
            </form>
        </div>
        </br>
    @endif



    <div class="container bg-light p-5" style="border-radius: 20px;">
        <div class="row my-5">
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/2.jpg') }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/3.png') }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2>Selamat Datang di Page <br><b>Steam Indonesia</b></h2>
                    <p class="text-secondary">Tempat dimana kamu bisa melakukan apapun, <br>Buat akun Steammu untuk
                        mengeksplor lebih lanjut </p>
                    {{-- <a href="{{ route('login') }}" class="btn btn-primary"><b>login</b></a>
                        <a href=""{{ route('register') }}"" class="btn btn-primary"><b>Daftar Sekarang!</b></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    </section>
@endsection
