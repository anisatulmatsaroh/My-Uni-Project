<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>P2M.store | Toko Online Fashion Muslimah di Madura</title> 
    <meta name="description" content="TokoOnline, Madura, terlengkap, murah"/>
    <meta name="keywords" content="Hijab, Murah, Madura, Baru, terlengkap, harga, terjangkau" />
    <meta name="author" content="Layli Anisa Fitriani"/>
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: Facebook Open Graph -->
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
    <!--start: Header -->
    <header>
        
        <!--start: Container -->
        <div class="container">
            
            <!--start: Row -->
            <div class="row">
                    
                <!--start: Logo -->
                <div class="logo span3">
                        
                    <a class="brand" src="img/logopanjang.png" alt="logo"></a>
                        
                </div>
                <!--end: Logo -->
                    
                <!--start: Navigation -->
                <div class="span9">
                    
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="produk.php">Produk Kami</a></li>
                                    <li><a href="detail.php">Keranjang</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Admin</a></li>
                                            <li><a href="index.php">Konsumen</a></li>
                                            <!--<li class="divider"></li>
                                            <li class="nav-header">Nav header</li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>  
                <!--end: Navigation -->
                    
            </div>
            <!--end: Row -->
            
        </div>
        <!--end: Container-->           
            
    </header>
    <!--end: Header-->
    
    <!-- start: Slider -->
    <div class="slider-wrapper">

        <div id="da-slider" class="da-slider">
            <div class="da-slide">
                <h2>HIJAB</h2>
                <p>Menyediakan berbagai hijab terkini dengan bahan yang nyaman saat dipakai.</p>
                <a href="produk.php" class="da-link">Lihat Produk</a>
                <div class="da-img"><img src="img/parallax-slider/jilbab.png" alt="image01" /></div>
            </div>
            <div class="da-slide">
                <h2>BAJU GAMIS</h2>
                <p>Menyediakan berbagai gamis fashion muslimah.</p>
                <a href="produk.php" class="da-link">Lihat Produk</a>
                <div class="da-img"><img src="img/parallax-slider/gamis.png" alt="image02" /></div>
            </div>
            <div class="da-slide">
                <h2>AKSESORIS</h2>
                <p>Menyediakan berbagai aksesoris muslimah seperti inner, kaos kaki, handsock, dan Gantungan Kunci Muslimah.</p>
                <a href="produk.php" class="da-link">Lihat Produk</a>
                <div class="da-img"><img src="img/parallax-slider/kaoskakiwudhu.png" alt="image03" /></div>
            </div>
            <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </nav>
        </div>
        
    </div>
    <!-- end: Slider -->
            
    <!--start: Wrapper-->
    <div id="wrapper">
                
        <!--start: Container -->
        <div class="container">
    
            <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <p>
                    Selamat Berbelanja Customer :)
                </p>
                <p><a class="btn btn-success btn-large" href="detailproduk.php">Mulai Berbelanja &raquo;</a></p>

<!---->
            </div>
            <!-- end: Row -->
            
            <hr>
        
            <!-- start Clients List --> 
            <div class="clients-carousel">
        
                <ul class="slides clients">
                    <li><img src="image/instan.png" alt=""/></li>
                    <li><img src="image/etnik.png" alt=""/></li>    
                    <li><img src="image/hs1.png" alt=""/></li>
                    <li><img src="image/nylon.png" alt=""/></li>
                    <li><img src="image/pernak.png" alt=""/></li> 
                </ul>
        
            </div>
            <!-- end Clients List -->
        
            <hr>
            
            <!-- start: Row -->
            <div class="row">
                
                <!-- start: Icon Boxes -->
                <div class="icons-box-vert-container">

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-ok ico-color circle-color big"></i>
                            <div class="icons-box-vert-info">
                                <h3>Kemudahan Berbelanja</h3>
                                <p>Dapatkan kemudahan berbelanja di P2M.store | Online Shop Madura, Kami menyediakan berbagai fashion muslimah dengan harga terjangkau.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box-->

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-cup  ico-white circle-color-full big-color"></i>
                            <div class="icons-box-vert-info">
                                <h3>Juara Pengiriman Delivery</h3>
                                <p>Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 200 ribu radius 10km dari kantor kami.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box -->

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-ipad ico-color circle-color big"></i>
                            <div class="icons-box-vert-info">
                                <h3>Berbelanja Dengan Gadget</h3>
                                <p>Anda bisa memesan berbagai produk yang tersedia di P2M.store | Online Shop Madura dengan menggunakan gadget kesayangan anda secara praktis.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box -->

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
                            <div class="icons-box-vert-info">
                                <h3>Sosial Media</h3>
                                <p>Follow twitter dan fanpage facebook kami untuk mendapatkan update promo spesial setiap harinya.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box -->

                </div>
                <!-- end: Icon Boxes -->
                <div class="clear"></div>
            </div>
            <!-- end: Row -->
            
            <hr>
            
        </div>
        <!--end: Container-->
    
    </div>
    <!-- end: Wrapper  -->          

    <!-- start: Footer Menu -->
    <div id="footer-menu" class="hidden-tablet hidden-phone">

        <!-- start: Container -->
        <div class="container">
            
            <!-- start: Row -->
            <div class="row">

                <!-- start: Footer Menu Logo -->
                <div class="span2">
                    <div id="footer-menu-logo">
                        <a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
                    </div>
                </div>
                <!-- end: Footer Menu Logo -->

                <!-- start: Footer Menu Links-->
                <div class="span9">
                    
                    <div id="footer-menu-links">

                        <ul id="footer-nav">

                            <li><a href="produk.php">HIJAB</a></li>

                            <li><a href="produk.php">BAJU GAMIS</a></li>

                            <li><a href="produk.php">AKSESORIS</a></li>

                        </ul>

                    </div>
                    
                </div>
                <!-- end: Footer Menu Links-->

                <!-- start: Footer Menu Back To Top -->
                <div class="span1">
                        
                    <div id="footer-menu-back-to-top">
                        <a href="#"></a>
                    </div>
                
                </div>
                <!-- end: Footer Menu Back To Top -->
            
            </div>
            <!-- end: Row -->
            
        </div>
        <!-- end: Container  -->    

    </div>  
    <!-- end: Footer Menu -->

    <!-- start: Footer -->
    <div id="footer">
        
        <!-- start: Container -->
        <div class="container">
            
            <!-- start: Row -->
            <div class="row">

                <!-- start: About -->
                <div class="span3">
                    
                    <h3>Tentang P2M.store</h3>
                    <p>
                        P2M.store adalah toko online yang bergerak di bidang fashion muslimah baik di kalangan muda maupun tua.
                    </p>
                        
                </div>
                <!-- end: About -->

                <!-- start: Photo Stream -->
                <div class="span3">
                    
                    <h3>Alamat Kami</h3>
                    Jl.Jeruk Dalam Rt.01 Rw.08 Desa Banyuajuh Kecamatan Kamal Kabupaten Bangkalan 69162<br />
                    Telp : 089649592946<br />
                    Email : <a href="mailto:laylihasanah.nlh@gmail.com">laylihasanah.nlh@gmail.com</a>
                </div>
                <!-- end: Photo Stream -->

                <!-- start: Follow Us -->
                <div class="span3">
                
                    <h3>Follow Us!</h3>
                    <ul class="social-grid">
                        <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-twitter">
                                            <a href="http://twitter.com"></a>
                                        </div>
                                        <div class="social-info-back social-twitter-hover">
                                            <a href="http://twitter.com"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-facebook">
                                            <a href="http://facebook.com"></a>
                                        </div>
                                        <div class="social-info-back social-facebook-hover">
                                            <a href="http://facebook.com"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- end: Follow Us -->
                
                    <!-- start: Newsletter -->
                <!--    <form id="newsletter">
                        <h3>Newsletter</h3>
                        <p>Please leave us your email</p>
                        <label for="newsletter_input">@:</label>
                        <input type="text" id="newsletter_input"/>
                        <input type="submit" id="newsletter_submit" value="submit">
                    </form> -->
                    <!-- end: Newsletter -->
                
                </div>
                
            </div>
            <!-- end: Row -->   
            
        </div>
        <!-- end: Container  -->

    </div>
    <!-- end: Footer -->

    <!-- start: Copyright -->
    <div id="copyright">
    
        <!-- start: Container -->
        <div class="container">
        
            <p>
                Copyright &copy; <a href="http://www.niqoweb.com">P2M.store 2018</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
            </p>
    
        </div>
        <!-- end: Container  -->
        
    </div>  
    <!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>