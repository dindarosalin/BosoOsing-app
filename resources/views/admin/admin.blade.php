<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        {{-- FOR ADMIN --}}
        <section id="education">
            <div class="title">
                <h1>Halaman Admin</h1>
            </div>

            <div class="education-center container">
                <div class="education" data-aos="fade-down" data-aos-duration="2000">
                    <a href="{{ route('backend.wisata.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-mountain"></i></span>
                        <h2>Admin Wisata</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-down" data-aos-duration="2000">
                    <a href="{{ route('backend.budaya.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-book-open"></i></span>
                        <h2>Admin Budaya</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-down" data-aos-duration="2000">
                    <a href="{{ route('backend.kuliner.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-utensils"></i></span>
                        <h2>Admin Kuliner</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-down" data-aos-duration="2000">
                    <a href="{{ route('backend.transisi.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-book"></i></span>
                        <h2>Admin transisi</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-up" data-aos-duration="2000">
                    <a href="{{ route('backend.osing.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-book"></i></span>
                        <h2>Admin Osing</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-up" data-aos-duration="2000">
                    <a href="{{ route('backend.translate.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-book"></i></span>
                        <h2>Admin Indonesia</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-up" data-aos-duration="2000">
                    <a href="{{ route('backend.user.view') }}" style="color: aliceblue;">
                        <span><i class="fas fa-user"></i></span>
                        <h2>Admin User</h2>
                    </a>
                </div>

                <div class="education" data-aos="fade-up" data-aos-duration="2000">
                    <a href="{{ url('user/process-logout') }}" style="color: aliceblue;">
                        <span><i class="fas fa-user"></i></span>
                        <h2>Logout</h2>
                    </a>
                </div>
            </div>
        </section>
        <!-- pengecekan sudah login atau belum -->

        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets/js/countries.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <!-- Typeit -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <!-- Glidejs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <!-- Custom Script -->
        <script src="{{ asset('assets/js/admin.js') }}"></script>

        @yield('script')


</div>
