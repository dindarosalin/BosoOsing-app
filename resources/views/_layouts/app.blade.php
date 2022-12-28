<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boso Osing App</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Import Google Font - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .wrapper .text-input {
            display: flex;
            border-bottom: 1px solid #ccc;
        }

        .text-input .to-text {
            border-radius: 0px;
            border-left: 1px solid #ccc;
        }

        .text-input textarea {
            height: 250px;
            width: 100%;
            border: none;
            outline: none;
            resize: none;
            background: none;
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .text-input textarea::placeholder {
            color: #b7b6b6;
        }

        .controls,
        li,
        .icons,
        .icons i {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .controls {
            list-style: none;
            padding: 12px 15px;
        }

        .controls .row .icons {
            width: 38%;
        }

        .controls .row .icons i {
            width: 50px;
            color: #adadad;
            font-size: 14px;
            cursor: pointer;
            transition: transform 0.2s ease;
            justify-content: center;
        }

        .controls .row.from .icons {
            padding-right: 15px;
            border-right: 1px solid #ccc;
        }

        .controls .row.to .icons {
            padding-left: 15px;
            border-left: 1px solid #ccc;
        }

        .controls .row select {
            color: #333;
            border: none;
            outline: none;
            font-size: 18px;
            background: none;
            padding-left: 5px;
        }

        .text-input textarea::-webkit-scrollbar {
            width: 4px;
        }

        .controls .row select::-webkit-scrollbar {
            width: 8px;
        }

        .text-input textarea::-webkit-scrollbar-track,
        .controls .row select::-webkit-scrollbar-track {
            background: #fff;
        }

        .text-input textarea::-webkit-scrollbar-thumb {
            background: #ddd;
            border-radius: 8px;
        }

        .controls .row select::-webkit-scrollbar-thumb {
            background: #999;
            border-radius: 8px;
            border-right: 2px solid #ffffff;
        }

        .controls .exchange {
            color: #adadad;
            cursor: pointer;
            font-size: 16px;
            transition: transform 0.2s ease;
        }

        .controls i:active {
            transform: scale(0.9);
        }

        .container .button-translate {
            width: 100%;
            padding: 14px;
            outline: none;
            border: none;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
            font-size: 17px;
            border-radius: 5px;
            background: #5372F0;
        }

        @media (max-width: 660px) {
            .container {
                padding: 20px;
            }

            .wrapper .text-input {
                flex-direction: column;
            }

            .text-input .to-text {
                border-left: 0px;
                border-top: 1px solid #ccc;
            }

            .text-input textarea {
                height: 200px;
            }

            .controls .row .icons {
                display: none;
            }

            .container .button-translate {
                padding: 13px;
                font-size: 16px;
            }

            .controls .row select {
                font-size: 16px;
            }

            .controls .exchange {
                font-size: 14px;
            }
        }
    </style>
    @yield('style')
</head>

<body>
    <section>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Boso Osing</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/budaya') }}">Budaya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kuliner') }}">Kuliner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/wisata') }}">Wisata</a>
                        </li>

                        <!-- pengecekan sudah login atau belum -->
                        @if (Auth::check() == false)
                            <a class="btn btn-outline-primary ms-2" href="{{ url('user/login') }}">Sign In Or Sign Up</a>
                        @else
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('profile.index') }}">{{ __('Profile') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ url('user/process-logout') }}">logout</a></li>
                                </ul>
                            </div>
                        @endif
                    </ul>


                </div>
            </div>
        </nav>
    </section>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/countries.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
