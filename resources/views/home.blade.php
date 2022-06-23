<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accidents Routiéres QC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/stop.png" rel="icon">
  <link href="assets/img/stop.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Visualisation 8INF915</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#details">Visualisations</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="#clients">Assureurs</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>{{$hero->title}}</span></h1>
            <h2>{{$hero->description_1}}</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Lire</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset($hero->image)}}" class="img-fluid animated" alt="">

        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>{{$abouts->title}}</h3>

            

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-check"></i></div>
              <p class="description">{{$abouts->description_1}}</p>
              

            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-check"></i></div>
              <p class="description">{{$abouts->description_2}}</p>
              

            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-check"></i></div>
              <p class="description">{{$abouts->description_3}} <a href="{{asset('pdf/Rapport_accidents_routiers.pdf')}}" download="">ici</a> </p>
              

            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Visualisations</h2>
          <p>Visualisations</p>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
          <a href="{{$visus->first()->lien}}" blank> <img src="{{asset($visus->first()->image)}}" class="img-fluid" alt=""></a> 
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-up">
            <h3>{{$visus->first()->title}}</h3>
            
            <ul>
              <li><i class="bi bi-check"></i> {{$visus->first()->description_1}}</li>
              <li><i class="bi bi-check"></i> {{$visus->first()->description_2}}</li>
              <li><i class="bi bi-check"></i> {{$visus->first()->description_3}}</li>
            </ul>
            
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <a href="{{$visus->skip(1)->first()->lien}}" target="blank">     <img src="{{asset($visus->skip(1)->first()->image)}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>{{$visus->skip(1)->first()->title}}</h3>
            
            <p>
              {{$visus->skip(1)->first()->description_1}}
            </p>
            <p>
              {{$visus->skip(1)->first()->description_2}}

            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-6" data-aos="fade-right">
            <a href="{{$visus->skip(2)->first()->lien}}" blank>     <img src="{{asset($visus->skip(2)->first()->image)}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col-md-6 pt-5" data-aos="fade-up">
            <h3>{{$visus->skip(2)->first()->title}}</h3>
            <p>{{$visus->skip(2)->first()->description_1}}</p>
            <p>Top 5 des genres d’accidents causant le plus de blessés graves:
            </p>
            <ul>
              </li>
              <li><i class="bi bi-check"></i>  {{$visus->skip(2)->first()->description_2}}
              </li>
              <li><i class="bi bi-check"></i> {{$visus->skip(2)->first()->description_3}}
              </li>
              <li><i class="bi bi-check"></i> {{$visus->skip(2)->first()->description_4}}
              </li>
              <li><i class="bi bi-check"></i> {{$visus->skip(2)->first()->description_5}}
              </li>
            </ul>
           
          </div>
        </div>

        <div class="row content">
          <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
            <a href="{{$visus->skip(3)->first()->lien}}" blank>     <img src="{{asset($visus->skip(3)->first()->image)}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>{{$visus->skip(3)->first()->title}}</h3>
           
            <p>
              {{$visus->skip(3)->first()->description_1}}
            </p>
            <p>
              {{$visus->skip(3)->first()->description_2}}
            </p>
           
          </div>
        </div>
        
        <div class="row content ">
          <div class="col-md-4 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>{{$visus->skip(4)->first()->title}}</h3>
           
            <p>
              {{$visus->skip(4)->first()->description_1}}
            </p>
           
           
          </div>
          <div class="col-md-8" data-aos="fade-right">

            <a href="{{$visus->skip(4)->first()->lien}}" target="blank">     <img src="{{asset($visus->skip(4)->first()->image)}}" class="img-fluid" alt=""></a>
          </div>
         
           
          </div>
        </div>

      </div>
      </div>
    </section><!-- End Details Section -->

 
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" >
    <div class="section-title" data-aos="fade-up">
      <h2>Equipe</h2>
      <p>Equipe</p>
    </div>
  </div>
</section><!-- End Counts Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        

        <div class="row justify-content-md-center" data-aos="fade-left">

          @foreach($teams as $team)

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0 ">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset($team->image)}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->fonction}}</span>
                <div class="social">
                  <a href="{{$team->lien_1}}" blank><i class="bi bi-facebook"></i></a>
                  <a href="{{$team->lien_2}}"><i class="bi bi-github"></i></a>
                  <a href="{{$team->lien_3}}"><i class="bi bi-graph-up"></i></a>
                  <a href="{{$team->lien_4}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
@endforeach
        

         

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Assureurs</h2>
          <p>Assureurs</p>
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
@foreach($logos as $logo)
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{asset($logo->image)}}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach
        
        </div>

      </div>

    </section><!-- End Clients Section -->

    <section id="counts" class="counts hero">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0  align-items-center">

          <div class="text-center text-lg-start">
            <a href="{{asset('pdf/Rapport_accidents_routiers.pdf')}}" class="btn-get-started scrollto" download=""><i class="bx bx-book">Télécharger</i> </a>
          </div>
        </div>
      </div>

      </div>

    </section>

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      

         


    <div class="container">
      
      <div class="credits">
        
        Designed by <a href="https:doing-tech.org">Doing-Tech</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>