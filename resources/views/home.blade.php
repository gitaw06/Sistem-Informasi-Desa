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
   <!-- <link href="assets/css/styles.css" rel="stylesheet" /> -->
   <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
</head>

<body id="page-top">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
         <a class="navbar-brand" href="#page-top">DESA TASIK SERAI</a>
         <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#home">Home</a></li>
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#footer">Contact</a></li>
               @guest <!-- Menampilkan saat pengguna belum login -->
               <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 nav-link-icon bg-primary rounded text-white" href="{{ route('masuk') }}">
                     <i class="fas fa-user"></i>
                     <span class="nav-link-inner--text">Login</span>
                  </a>
               </li>
               @endguest
               <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li> -->
            </ul>
         </div>
      </div>
   </nav>
   <!-- Masthead-->
   <header id="home" class="masthead bg-primary text-white text-center" style="height: 100vh; background-image: url('https://cdn.pixabay.com/photo/2019/12/19/12/48/purple-4706127_1280.jpg');  background-size: cover; ">
      <div class="overlay">
         <!-- Masthead Avatar Image-->
         <!-- <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." /> -->
         <img src="{{ url('/storage/logo1.png') }}" width="150px" class="mb-5" alt="" srcset="">
         <!-- <i class="fa fa-leaf" aria-hidden="true" style="font-size: 200px; margin-bottom: 20px;"></i> -->
         <!-- Masthead Heading-->
         <h1 class="masthead-heading text-uppercase mb-0">
            Selamat Datang
         </h1>
         <!-- Icon Divider-->
         <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <!-- Masthead Subheading-->
         <marquee style="border: 2px solid white;">
            <p class="masthead-subheading font-weight-light mb-0">DESA {{ Str::upper($desa->nama_desa) }} KECAMATAN {{ Str::upper($desa->nama_kecamatan) }} KABUPATEN {{ Str::upper($desa->nama_kabupaten) }}</p>
         </marquee>
         <div class="d-flex justify-content-center text-white">
            <div id="clock" style="margin-right: 5px;"></div>
            <div id="date"></div>
         </div>
         <!-- <p class="masthead-subheading font-weight-light mb-0" style="font-size: 15px;">uuuuuuuuuuuuuu</p> -->
      </div>
   </header>
   <!-- About Section-->
   <section class="page-section  mb-0" id="about">
      <div class="container">
         <!-- About Section Heading-->
         <h2 class="page-section-heading text-center text-uppercase ">About</h2>
         <!-- Icon Divider-->
         <div class="divider-custom divider">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <!-- About Section Content-->
         <div class="row mt-8 text-white">
            <div class="col-md-4">
               <div class="card p-3 bg-primary">
                  <h3>Visi</h3>
                  <ul>
                     <li>Mewujudkan Desa Tasik Serai Barat sebagai salah satu desa sejahtera di kabupaten Bengkalis</li>
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
               <div class="card p-3 bg-primary">
                  <h3>Keterangan Desa</h3>
                  <p class="text-justify">Desa Tasik Serai Barat adalah Desa yang berada di wilayah kecamatan Mandau kabupaten Bengkalis, kemudian menjadi kecamatan pinggir kabupaten Bengkalis. Desa Tasik Serai Barat berdiri pada tahun 1930 sebelum merdeka sudah terbentuk kepenghuluan</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card p-3 bg-primary">
                  <img src="{{ URL::to('/') }}/img/header.jpeg" alt="Tasik Serai Barat" class="img-fluid rounded mb-3">
                  <img src="{{ URL::to('/') }}/img/desa2.jpeg" alt="Tasik Serai Barat" class="img-fluid rounded">
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Footer-->
   <footer class="footer text-center" id="footer">
      <div class="container">
         <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-6 mb-5 mb-lg-0">
               <!-- <h4 class="text-uppercase mb-4">Lokasi</h4>
               <p class="lead mb-0">

               </p> -->
            </div>
            <!-- Footer Social Icons-->
            <!-- <div class="col-lg-6 mb-5 mb-lg-0">
               <h4 class="text-uppercase mb-4">Around the Web</h4>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div> -->
            <!-- Footer About Text-->
            <div class="col-lg-6">
               <h4 class="text-uppercase mb-4">Call Center</h4>
               <p class="lead mb-0">
                  <i class="fa fa-phone mr-1"></i>
                  <a href="https://wa.me/6282114811997" class="text-white text-decoration-none" target="_blank">
                     +62 821-1481-1997
                  </a>
               </p>
               <p class="lead mb-0">
                  <i class="fa fa-envelope mr-1"></i>
                  <a href="mailto:nazriakir21@gmail" class="text-white text-decoration-none" target="_blank">
                     nazriakir21@gmail.com
                  </a>
               </p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Core theme JS-->
   <script src="assets/js/scripts.js"></script>
   <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

<script type="text/javascript">
   function showTime() {
      var a_p = "";
      var today = new Date();
      var curr_hour = today.getHours();
      var curr_minute = today.getMinutes();
      var curr_second = today.getSeconds();
      if (curr_hour < 12) {
         // a_p = "AM";
      } else {
         // a_p = "PM";
      }
      if (curr_hour == 0) {
         curr_hour = 12;
      }
      if (curr_hour > 12) {
         curr_hour = curr_hour - 12;
      }
      curr_hour = checkTime(curr_hour);
      curr_minute = checkTime(curr_minute);
      curr_second = checkTime(curr_second);
      document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
   }

   function checkTime(i) {
      if (i < 10) {
         i = "0" + i;
      }
      return i;
   }
   setInterval(showTime, 500);
</script>
<!-- Menampilkan Hari, Bulan dan Tahun -->
<script type='text/javascript'>
   var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
   var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
   var date = new Date();
   var day = date.getDate();
   var month = date.getMonth();
   var thisDay = date.getDay(),
      thisDay = myDays[thisDay];
   var yy = date.getYear();
   var year = (yy < 1000) ? yy + 1900 : yy;
   document.getElementById('date').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>