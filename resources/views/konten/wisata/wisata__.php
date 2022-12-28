@extends('_layouts.app')

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">

<body>
  <main>
        </br>
        <header class="container bg-light p-5" style="border-radius: 20px;">
          <h2 class="col-12 text-center tm-section-title">
            Wisata Banyuwangi
          </h2>
          <p class="col-12 text-center">
            Total 3 HTML pages are included in this template. Header image has a
            parallax effect. You can feel free to download, edit and use this
            TemplateMo layout for your commercial or non-commercial websites.
          </p>
        </header></br>

        <!-- Gallery -->
        <div class="container bg-light p-5" style="border-radius: 20px;">
          <!-- gallery page 1 -->
          <div id="tm-gallery-page" class="tm-gallery-page" style="border-radius: 10px">

            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcJGZ3AGMYECNv2C0r6kN6qeoXmcTXzT8ha7RDxmuryA47WwMFRixOp_cZljG3eeLsnKI&usqp=CAU"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Gunung Ijen</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article></br>



            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/12/25/3685150705.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Pulau Merah</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>


            
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://cdn.nativeindonesia.com/foto/2018/11/TN-Baluran-Savana-Bekol.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Alas Baluran</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://images.solopos.com/2020/12/03-alas-purwo-800x600.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Alas Purwo</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article></br>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://1.bp.blogspot.com/-fvbq9Z4Qn1w/YWFx8s3SQvI/AAAAAAAAglE/b-7P0Ff_SBM03DwLKn4kZCl2esyIyt11wCLcBGAsYHQ/s1440/muara%2Bmbaduk%2Bcamping.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Muara Mbaduk</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://assets.promediateknologi.com/crop/0x0:0x0/750x500/photo/2022/09/06/2402025031.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Telunjuk Raung</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://www.yukbanyuwangi.co.id/wp-content/uploads/2020/08/IMG_7781-1024x576.jpg"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Pantai Boom Marina</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
              <figure>
                <img
                  src="https://indonesiatraveler.id/wp-content/uploads/2021/09/Banyuwangi-Bangsring-Underwater-Photo-by@ikhwan.arif_.56.png"
                  alt="Image"
                  class="img-fluid tm-gallery-img"
                />
                <figcaption>
                  <h4 class="tm-gallery-title">Bangsring Underwater</h4>
                  <p class="tm-gallery-description">
                    Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                    amet tellus accumsan
                  </p>
                  <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </figcaption>
              </figure>
            </article>
          </div>
          <!-- gallery page 1 -->
        </div>
      </main>
  <!-- Scripts -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

  </body>
@endsection