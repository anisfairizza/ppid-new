<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>PPID LLDIKTI XI</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="../../assets/img/lldikti/kemdikbud.png" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"" type="text/css" />
  <!-- Swiper --> 
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('assets/css/icons.css')}}" type="text/css" />
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}" type="text/css" />

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="#">
              <img class="logo" src="../../assets/img/lldikti/kemdikbud.png" alt="logo" />
            </a>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="/">Beranda</a>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="https://lldikti11.kemdikbud.go.id/">
                          Halaman Resmi LLDIKTI Wilayah XI
                        </a>
                        
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/profil">
                          Profil PPID
                        </a>
                      </li>
                      <li class="dropdown-submenu dropdown-hover"><a
                        class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/struktur">
                        Struktur Organisasi PPID
                      </a>
                    </li>
                    <li class="dropdown-submenu dropdown-hover"><a
                      class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/visi-misi">
                      Visi dan Misi
                    </a>
                  </li>
                  <li class="dropdown-submenu dropdown-hover"><a
                    class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/tugas-fungsi">
                    Tugas dan Fungsi
                  </a>
                </li>
                    </ul>

                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Daftar Informasi Publik
                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/daftar-informasi-publik">
                          Daftar Informasi Publik
                        </a>
                        
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/informasi-berkala">
                          Informasi Berkala
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                        class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/informasi-setiap-saat">
                        Informasi Setiap Saat
                      </a>
                      </li>
                      <li class="dropdown-submenu dropdown-hover"><a
                        class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/informasi-serta-merta">
                        Informasi Serta Merta
                        </a>
                      </li>
                      <li class="dropdown-submenu dropdown-hover"><a
                      class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/informasi-dikecualikan">
                      Informasi Dikecualikan
                      </a>
                      </li>
                      <li class="dropdown-submenu dropdown-hover"><a
                        class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/akuntabilitas-kinerja">
                        Akuntabilitas Kinerja
                        </a>
                      </li>


                    </ul>

                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Standar Layanan

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/sp-informasi">
                          Prosedur Pelayanan Informasi Publik
                          </a>
                      </li>
                       <!-- 
                     <li class="dropdown-submenu dropdown-hover"><a
                        class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="/sp-keberatan">
                        Prosedur Pengajuan Keberatan Informasi Publik
                        </a>
                    </li>-->
                    </ul>

                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Berita

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="https://lldikti11.kemdikbud.go.id/">
                          Berita LLDIKTI XI
                        </a>
                        
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="http://dikti.kemdikbud.go.id/category/kabar-dikti/kabar/">
                          Berita Kemendiktisaintek
                        </a>
                      </li>
                    </ul>

                  </div>
                </li>

              </ul>
              <div class="nav_account btn_demo2">
                <a href="/kontak" class="btn btn_sm_primary effect-letter rounded-8">
                  Kontak
                </a>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      @yield('content')
      <!-- end main -->
    </div>
    <!-- [id] content -->

    <!-- footr -->
    <footer class="defalut-footer foot_demo3 light margin-t-5 padding-py-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="item_about">
              <a class="logo" href="#">
                <img src="../../assets/img/lldikti/kemdikbud.png" alt="" />
              </a>
              <p>
                Lembaga Layanan Pendidikan Tinggi Wilayah XI Kalimantan
              </p>
              <div class="address">
                <span>Jl. Adhyaksa No.1 Banjarmasin 70123<br>
                  Kalimantan Selatan</span>
                <span>Telpon : 0511-3304583 / 0511-3304477<br>
                  Whatsapp : <a href="wa.me/0812-5561-4411">0812-5561-4411</a></span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2">
            <div class="item_links">
              <h4>Sosial</h4>
              <a class="nav-link" href="https://lldikti11.kemdikbud.go.id/">Website</a>
              <a class="nav-link" href="">Facebook</a>
              <a class="nav-link" href="https://x.com/lldikti11/">Twitter</a>
              <a class="nav-link" href="https://www.instagram.com/lldikti_11/">Instagram</a>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2">
            <div class="item_links">
              <h4>Aplikasi Kami</h4>
              <a class="nav-link" href="">PINANDU</a>
              <a class="nav-link" href="">SINGKRON</a>
              <a class="nav-link" href="">Surat LLDIKTI XI</a>
              <a class="nav-link" href="">Aksi Berkah</a>
              <a class="nav-link" href="">SISPRAS</a>
              <a class="nav-link" href="">Datamart</a>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
            <div class="item_subscribe">
              <h4>Lokasi kami</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.2482529147924!2d114.59191977403874!3d-3.2885586966863527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54445063df59733%3A0xc601f8b407f8c2de!2sLembaga%20Layanan%20Pendidikan%20Tinggi%20Wilayah%20XI%20Kalimantan!5e0!3m2!1sid!2sid!4v1738633164742!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 text-center padding-t-4">
          <div class="copyright">
            <span>©2025 LLDIKTI Wilayah XI - Sistem Informasi 
              All Right Reseved</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- End. -->

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Tosts -->
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
      <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true"
        data-animation="true" data-autohide="false">
        <div class="toast-body">
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <i class="tio clear"></i>
          </button>
          <h5>Selamat Datang 👋</h5>
          <p>Jika ada pertanyaan terkait permohonan PPID bisa <a href="https://wa.me/6281255614411" target="_blank">Hubungi kami</a></p>
        </div>
      </div>
    </div>
    <!-- End. Toasts -->

    <!-- Video Modal -->
    <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <!-- Close -->
      <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="../../assets/img/lldikti/kemdikbud.png" />
      </div>
    </section>
    <!-- End. Loader -->
  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="{{ asset('assets/js/jquery-3.5.0.js')}}" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="{{ asset('assets/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
  <!-- popper -->
  <script src="{{ asset('assets/js/popper.min.js')}}" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="{{ asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="{{ asset('assets/js/vendor/particles.min.js')}}" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="{{ asset('assets/js/vendor/TweenMax.min.js')}}" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="{{ asset('assets/js/vendor/ScrollMagic.js')}}" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="{{ asset('assets/js/vendor/animation.gsap.js')}}" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="{{ asset('assets/js/vendor/debug.addIndicators.min.js')}}" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="{{ asset('assets/js/vendor/swiper.min.js')}}" type="text/javascript"></script>
  <!-- countdown -->
  <script src="{{ asset('assets/js/vendor/countdown.js')}}" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="{{ asset('assets/js/vendor/simpleParallax.min.js')}}" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="{{ asset('assets/js/vendor/waypoints.min.js')}}" type="text/javascript"></script>
  <!-- counterup -->
  <script src="{{ asset('assets/js/vendor/jquery.counterup.min.js')}}" type="text/javascript"></script>
  <!-- charming -->
  <script src="{{ asset('assets/js/vendor/charming.min.js')}}" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="{{ asset('assets/js/vendor/jquery.bxslider.min.js')}}" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="{{ asset('assets/js/vendor/sharer.js')}}" type="text/javascript"></script>
  <!-- sticky -->
  <script src="{{ asset('assets/js/vendor/sticky.min.js')}}" type="text/javascript"></script>
  <!-- Aos -->
  <script src="{{ asset('assets/js/vendor/aos.js')}}" type="text/javascript"></script>
  <!-- main file -->
  <script src="{{ asset('assets/js/main.js')}}" type="text/javascript"></script>
  <!-- agency -->
  <script src="{{ asset('assets/js/pages/agency.js')}}" type="text/javascript"></script>

</body>

</html>