
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title and Meta Tags Begins -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <title>E-Inventaris</title>
        <!-- Google Font Begins -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'>
        <!-- Google Font Ends -->
        <!-- CSS Begins-->
        <link href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
        <link href="{{asset('landing/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/portfolio.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/animate.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('landing/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/flexslider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/tweet-carousel.css')}}" rel="stylesheet" type="text/css" />
        <!-- Main Style -->
        <link href="{{asset('landing/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('landing/responsive.css')}}" rel="stylesheet" type="text/css" />
        <!-- Color Panel -->

        <!-- Skin Colors -->
        <link href="{{asset('landing/red.css')}}" id="changeable-colors" rel="stylesheet" type="text/css" />
    </head>
    <body id="home">

        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </div>

        <header id="header">
            <div class="navbar navbar-fixed-top" id="navigation">
                <div class="container">
                    <!-- Navigation Bar -->
                    <div class="navbar-header">
                        <!-- Responsive Menu Button -->
                        <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Logo Image -->
                        <a href="main.html" class="navbar-brand">Logo</a>
                    </div>
                    <!-- End Navigation Bar -->
                    <!-- Navigation Menu -->
                    <nav id="topnav" role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">
                      <li><a href="#home" class="scroll">Beranda</a></li>
                      <li><a href="#additional" class="scroll">Fitur</a></li>
                      <li><a href="#contact" class="scroll">Kontak</a></li>
                      @if(Auth::check())
                        <li><a href="{{url('logout')}}" class="scroll">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                      @else
                         <li><a href="#panel_admin" class="scroll">Login</a></li>
                      @endif
                      </ul>
                    </nav>
                    <!-- End Navigation Menu -->
                </div>
                <!-- End container -->
            </div>

            <!-- Intro Begins-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 intro-text">
                        <!-- TEXT -->
                        <div class="main">
                          <h1><span class="rotate text-color">E-INVENTARIS </span><br></h1>
                          <h2>SISTEM INVENTARIS ONLINE</h2>
                        </div>
                        <p class="medium_white_light">Aplikasi Inventaris Sarana Dan Prasarana Online adalah aplikasi inventaris berbasis web yang berfungsi dalam memanajemen peminjaman,pengembalian,dan pengelolaan barang.</p>
                            <!-- Link -->
                            <span class="page-scroll">
                            <a href="#welcome" class="btn slide-btn bg-inverse">Lebih Lanjut</a>
                            </span>

                    </div>
                    <div class="col-md-6">
						<!-- Image -->
                        <!-- <img src="girl.png" alt="" class="img-responsive" /> -->
                    </div>
                </div>
            </div>
            <!-- Intro Ends-->
        </header>

        <!-- Welcome Section Begins -->
        <section id="welcome" class="welcome-section">
            <div class="container welcome-inner">
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                        <h2>Selamat Datang di <span>E-INVENTARIS</span></h2>
                    </div>
                    <!-- Description -->
                    <p class="desc">Aplikasi Inventaris Sarana Dan Prasarana Online adalah aplikasi inventaris berbasis web yang berfungsi dalam memanajemen peminjaman,pengembalian,dan pengelolaan barang.</p>

                    <!-- <img src="atlant_technologies.png" class="img img-fluid"/> -->
                    </div>
                </div>
                <!-- Title & Desc Row Ends -->
                <!-- First Row Begins -->

            </div>
        </section>
        <!-- Welcome Section Ends -->
        <!-- Additional features Section Begins -->
        <section id="additional">
            <div class="additional-section">
                <div class="bg-overlay pattern"></div>
                <div class="container additional-inner">
                    <!-- Title & Desc Row Begins -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Title -->
                            <div class="title">
                                <h2>Fitur</h2>
                            </div>
                            <!-- Description -->
                            <p class="desc white">Berikut adalah beberapa fitur yang terdapat pada Aplikasi E-Inventaris</p>
                        </div>
                    </div>
                    <!-- Title & Desc Row Ends -->
                    <!-- Additional features Begins -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="additional-features animated" data-animation="fadeInUp" data-animation-delay="200">
                              <!-- Icon -->
                          <!-- <i class="fa fa-clock-o"></i> -->
                          <i class="fas fa-random"></i>
                          <!-- Content -->
                          <div class="additional-content">
                              <h5>Fleksibilitas</h5>
                              <p>Dengan E-Inventaris,anda bisa dengan mudahnya mengelola barang,mengatur pemesanan,dan lain lainnya.</p>
                          </div>
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="additional-features animated" data-animation="fadeInRight" data-animation-delay="300">
                                <!-- Icon -->
                                <!-- Icon -->
                                <!-- Icon -->
                                <!-- <i class="fa fa-book"></i> -->
                                <i class="fas fa-cloud"></i>
                                <!-- Content -->
                                <div class="additional-content">
                                    <h5>Online</h5>
                                    <p>Aplikasi E-Inventaris bisa diakses kapan saja dan dimana saja,sehingga memudahkan pengguna dalam penggunaan aplikasi E-inventaris. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="additional-features animated" data-animation="fadeInRight" data-animation-delay="400">
                                <!-- Icon -->
                                <!-- Icon -->
                            <i class="fa fa-user"></i>
                            <!-- Content -->
                            <div class="additional-content">
                                <h5>Bisa Diakses Seluruh Pengguna </h5>
                                <p>Aplikasi E-Inventaris bisa di akses oleh seluruh pengguna yang terdaftar sebagai anggota aplikasi E-Inventaris. </p>

                            </div>
                            </div>
                        </div>

                    </div>

                    <!-- Additional features Row Ends -->
                </div>
            </div>
        </section>
        <!-- Additional features Section Ends -->

        <!-- Subscribe Section Begins -->
    <section id="panel_admin">
        <div class="subscribe" style="background: #1f1f1f">
            <div class="container subscribe-inner" >
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                            <h2> Masuk Menggunakan <span>AKUN</span></h2>

                        </div>
                        <!-- Description -->
                        <p class="desc white">Login menggunakan akun yang sudah terdaftar untuk melakukan pemesanan dan sebagainya</p>
                    </div>
                </div>
                <br/>
                <!-- Title & Desc Row Ends -->
                <!-- Subscribe Row Begins -->
                <div class="row">
                    <div class="col-md-12 animated text-center" data-animation="fadeInUp" data-animation-delay="300">
                        <button type="button" class="btn bg-inverse btn-lg" data-loading-text="Loading..." onclick="window.location.href='{{url('/login')}}'">Masuk</button>
                    </div>
                </div>
                <!-- Subscribe Row Ends -->
            </div>
        </div>
    </section>

    <!-- Subscribe Section Ends -->
    <!-- Contact Section Begins -->
        <section id="contact" class="contact" style="text-align: center;">
            <div class="container contact-inner">
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                            <h2> Hubungi <span>Kami</span></h2>
                        </div>
                        <!-- Description -->
                        <p class="desc">Hubungi kami dengan kontak yang tersedia di bawah.</p>
                    </div>
                </div>
                <!-- Title & Desc Row Ends -->
                <!-- Contact Row Begins -->
                <div class="row">
                   
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-menu m-b-xs-15">
                    <h3 class="footer-header">Pintasan Cepat</h3>
                    <div class="row">
                        <div class="col-sm-12">

                                <a href="http://www.smkn1sumedang.sch.id/"><i class="icofont icofont-rounded-double-right"></i><h5>SMK NEGERI 1 SUMEDANG</h5></a>                                                              
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-menu m-b-xs-15">
                    <h3 class="footer-header">Kontak</h3>
                    <div class="row">
                        <div class="col-sm-12">

                                <i class="icofont icofont-home"></i><h5>SMK NEGERI 1 SUMEDANG<br/>
                                Jln. Mayor Abdurakhman No.209</h5>

                                <i class="icofont icofont-phone"></i><h5>0261-202056</h5>

                                <i class="icofont icofont-envelope"></i><h5><strong> Email SMK1 Sumedang</strong><br><a href="mailto:smkn1smd@gmail.com">smkn1smd@gmail.com</a></h5>

                        </div>
                    </div>
                </div>
                </div>
                <!-- Contact Row Ends -->
            </div>
        </section>
        <!-- Contact Section Ends -->
        <!-- Copyright Section Begins -->
   <section id="copyright" class="copyright">
       <div class="container">
           <div class="row">
               <!-- Copyright Title -->
               <div class="col-md-12 text-center">
                   <p>
                       &copy; 2019 - E-Inventaris<br>
                       Sistem Inventaris Sarana Dan Prasarana SMK<br />
                       SMK Negeri 1 Sumedang - Kab. Sumedang<br />
                       Untuk Informasi Lebih lanjut silahkan kirim Email ke: smkn1smd@gmail.com
                   </p>
               </div>
           </div>
       </div>
   </section>
   <!-- Copyright Section Ends -->

        <!-- Script Begins -->
        <script type="text/javascript" src="{{asset('landing/jquery-1.11.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/bootstrap-hover-dropdown.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/bootstrapValidator.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/jquery.sticky.js')}}"></script>
        <!-- Slider and Features Canvas -->
        <script type="text/javascript" src="{{asset('landing/jquery.flexslider-min.js')}}"></script>
        <!-- Overlay -->
        <script type="text/javascript" src="{{asset('landing/modernizr.js')}}"></script>
        <!-- Screenshot -->
        <script type="text/javascript" src="{{asset('landing/jquery.flexisel.js')}}"></script>
        <!-- Portfolio -->
        <script type="text/javascript" src="{{asset('landing/jquery.prettyPhoto.js')}}" ></script>
        <script type="text/javascript" src="{{asset('landing/jquery.mixitup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/jquery.fitvids.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/jquery.easing.1.3.js')}}"></script>
        <!-- Counting Section -->
        <script type="text/javascript" src="{{asset('landing/jquery.appear.js')}}"></script>
        <!-- Expertise Circular Progress Bar -->
        <script type="text/javascript" src="{{asset('landing/effect.js')}}"></script>
        <!-- Twitter -->
        <script type="text/javascript" src="{{asset('landing/carousel.js')}}"></script>
        <script type="text/javascript" src="{{asset('landing/scripts.js')}}"></script>
        <!-- Custom -->
        <script type="text/javascript" src="{{asset('landing/custom.js')}}"></script>
        <!-- Script Ends -->
    </body>
</html>
