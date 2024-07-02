<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>Beranda</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
   <!-- Font Awesome icons (free version)-->
   <!-- Icons -->
   <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
   <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
   <style>
      body {
         font-family: 'Montserrat', sans-serif;
      }

      .navbar {
         background-color: #3c6e47;
         transition: background-color 0.5s;
      }

      .navbar:hover {
         background-color: #355d3c;
      }

      .navbar-brand {
         font-size: 1.75rem;
         transition: color 0.5s;
      }

      .navbar-brand:hover {
         color: #fff;
      }

      .nav-link {
         font-size: 1.2rem;
         transition: background-color 0.5s, color 0.5s;
      }

      .nav-link:hover {
         background-color: #295233;
         color: #fff;
      }

      .masthead {
         background: url('https://cdn.pixabay.com/photo/2019/12/19/12/48/purple-4706127_1280.jpg') no-repeat center center;
         background-size: cover;
      }

      .masthead .overlay {
         background-color: rgba(0, 0, 0, 0.5);
         height: 100%;
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         z-index: 1;
      }

      .masthead .container {
         position: relative;
         z-index: 2;
      }

      .card {
         background-color: #3c6e47;
         color: #fff;
         border: none;
         transition: transform 0.3s;
      }

      .card:hover {
         transform: translateY(-10px);
      }

      footer {
         background-color: #3c6e47;
         color: #fff;
      }

      footer a {
         color: #fff;
         text-decoration: none;
      }

      footer a:hover {
         text-decoration: underline;
      }
   </style>
</head>

<body id="page-top">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
      <div class="container">
         <a class="navbar-brand" href="#page-top">DESA KERATO</a>
         <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#home">Home</a></li>
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#footer">Contact</a></li>
               @guest
               <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 nav-link-icon bg-primary rounded text-white" href="{{ route('masuk') }}">
                     <i class="fas fa-user"></i>
                     <span class="nav-link-inner--text">Login</span>
                  </a>
               </li>
               @endguest
            </ul>
         </div>
      </div>
   </nav>
   <!-- Masthead-->
   <header id="home" class="masthead bg-primary text-white text-center" style="height: 100vh;">
      <div class="overlay"></div>
      <div class="container d-flex align-items-center flex-column">
         <img src="{{ url('/storage/logo_sumbawa.png') }}" width="150px" class="mb-5" alt="" srcset="">
         <h1 class="masthead-heading text-uppercase mb-0">
            Selamat Datang
         </h1>
         <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <marquee style="border: 2px solid white;">
            <p class="masthead-subheading font-weight-light mb-0">DESA {{ Str::upper($desa->nama_desa) }} KECAMATAN {{ Str::upper($desa->nama_kecamatan) }} KABUPATEN {{ Str::upper($desa->nama_kabupaten) }}</p>
         </marquee>
         <div class="d-flex justify-content-center text-white">
            <div id="clock" style="margin-right: 5px;"></div>
            <div id="date"></div>
         </div>
      </div>
   </header>
   <!-- About Section-->
   <section class="page-section mb-0" id="about">
      <div class="container">
         <h2 class="page-section-heading text-center text-uppercase ">About</h2>
         <div class="divider-custom divider">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <div class="row mt-8 text-white">
            <div class="col-md-4">
               <div class="card p-3">
                  <h3>Visi</h3>
                  <ul>
                     <li>Mewujudkan Desa Kerato sebagai salah satu desa sejahtera di kabupaten Sumbawa</li>
                  </ul>
                  <h3>Misi</h3>
                  <ul>
                     <li>Meningkatkan tata pemerintahan yang demokratis, transparan, akuntabel, efisien dan efektif</li>
                     <li>Meningkatkan sumber daya manusia</li>
                     <li>Meningkatkan perekonomian pedesaan</li>
                     <li>Meningkatkan pembangunan infrastruktur pedesaan yang terarah dan berkualitas</li>
                     <li>Meningkatkan peran kelembagaan dan masyarakat desa dalam mendorong pembangunan desa</li>
                  </ul>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card p-3">
                  <h3>Keterangan Desa</h3>
                  <p class="text-justify">Desa Kerato adalah Desa yang berada di wilayah kabupaten Sumbawa</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card p-3">
                  <img src="{{ URL::to('/') }}/img/kantordesakerato.jpg" alt="Tasik Serai Barat" class="img-fluid rounded mb-3">
                  <img src="{{ URL::to('/') }}/img/desakerato.jpeg" alt="Tasik Serai Barat" class="img-fluid rounded">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Footer-->
   <footer class="footer text-center" id="footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
            </div>
            <div class="col-lg-6">
               <h4 class="text-uppercase mb-4">Call Center</h4>
               <p class="lead mb-0">
                  <i class="fa fa-phone mr-1"></i>
                  <a href="https://wa.me/6282114811997" class="text-white text-decoration-none" target="_blank">
                     +62 821 1481 1997
                  </a>
               </p>
               <h4 class="text-uppercase mb-4 mt-5">Contact Email</h4>
               <p class="lead mb-0">
                  <i class="fa fa-envelope mr-1"></i>
                  <a href="mailto:tes@gmail.com" class="text-white text-decoration-none" target="_blank">
                     tes@gmail.com
                  </a>
               </p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Copyright Section-->
   <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; Desa {{ Str::upper($desa->nama_desa) }} 2024</small></div>
   </div>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Core theme JS-->
   <script src="{{ asset('/js/scripts.js') }}"></script>
   <script>
      function showTime() {
         let date = new Date();
         let h = date.getHours(); // 0 - 23
         let m = date.getMinutes(); // 0 - 59
         let s = date.getSeconds(); // 0 - 59
         let session = "AM";
         if (h === 0) {
            h = 12;
         }
         if (h > 12) {
            h = h - 12;
            session = "PM";
         }
         h = (h < 10) ? "0" + h : h;
         m = (m < 10) ? "0" + m : m;
         s = (s < 10) ? "0" + s : s;
         let time = h + ":" + m + ":" + s + " " + session;
         document.getElementById("clock").innerText = time;
         document.getElementById("clock").textContent = time;
         setTimeout(showTime, 1000);
      }
      showTime();

      const date = new Date();
      const options = {
         weekday: 'long',
         year: 'numeric',
         month: 'long',
         day: 'numeric'
      };
      document.getElementById("date").innerText = date.toLocaleDateString('id-ID', options);
   </script>
</body>

</html>