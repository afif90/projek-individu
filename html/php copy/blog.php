<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Cocoon -Portfolio</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href="#">
                    <img src="assets/img/logo.png" alt="cocoon">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                   <li >
                         <a href="<?php echo base_url().'index_post'?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'about_post'?>">
                            About Us
                        </a>
                    </li>
                 
                         <a href="<?php echo base_url().'_post'?>">
                           
                        </a>
                  
                    <li>
                         <a href="<?php echo base_url().'portfolio_post'?>">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'blog_post'?>">
                            Blog
                        </a>
                    </li>
				    <li>
                       <a href="<?php echo base_url().'upload_post'?>">
                            Upload
                        </a>
                    </li>
                    <li>
                         <a href="<?php echo base_url().'contact_post'?>">
                            Contact
                        </a>
                    </li>
								     <li>
                        <a href="contact.php">
                            
                        </a>
                    </li>
			           <li>
                        <a href="contact.php">
                       
                        </a>
                    </li>
					                    <li>
                      <a href="<?php echo base_url().'login_post'?>">
                            Login
                        </a>
                    </li>
					   <li>
                         <a href="<?php echo base_url().'sign up_post'?>">
                           Sign up
                        </a>
                    </li>
					</li>
                </ul>
            </div>
            <!--main menu end -->

            <!--filter menu -->
            <div class="side_menu_section">
                <h4 class="side_title">filter by:</h4>
                <ul  id="filtr-container"  class="filter_nav">
                    <li  data-filter="*" class="active"><a href="javascript:void(0)" >all</a></li>
                    <li data-filter=".branding"> <a href="javascript:void(0)">branding</a></li>
                    <li data-filter=".design"><a href="javascript:void(0)">design</a></li>
                    <li data-filter=".photography"><a href="javascript:void(0)">photography</a></li>
                    <li data-filter=".architecture"><a href="javascript:void(0)">architecture</a></li>
                </ul>
            </div>
            <!--filter menu end -->


            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">
                    <ul class="social_menu">
                        <li>
                            <a href="#"> <i class="ion ion-social-pinterest"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-dribbble"></i> </a>
                        </li>
                    </ul>
                    <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div class="blog">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <div class="search-form">
                                    <input type="text" class="search-field" placeholder="Search">
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">
                                    
                                </h4>
                               
                            </div>
                            <div class="widget widget_instagram">
                                <h4 class="widget-title">
                                    
                                </h4>
                             
                            </div>
                            <div class="widget widget_tags">
                                <h4 class="widget-title">
                                    
                                </h4>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="assets/img/blog/blog1.png" alt="blog title " />
                                <div class="blog_date">
                                    31
                                    <span>
                                        november 2017
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                        Komposisi Arsitektur
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>By Robiul muannas</span>
                                    <span>fotografer and Creative</span>
                                    <span>5 Comments</span>
                                </div>
                                <p>
                                   ilustrasi KOMPOSISI SEIMBANG yang saya buat. Saya suka menggunakan ini untuk memberikan pengertian lebih dalam mengenai komposisi. Perhatikan pada bagian keseimbangan asimetris. Kedua sisi terlihat seimbang walaupun memiliki bentuk berbeda.  warna dari setiap objek dimana warna biru memberikan berat lebih.
                                </p>
                            </div>
                        </article>
                        <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="assets/img/blog/blog2.png" alt="blog title " />
                                <div class="blog_date">
                                    23
                                    <span>
                                        juli 2018
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                        Landscape mountain
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>By Edi nugraha</span>
                                    <span>Fotografer, Creative</span>
                                    <span>3 Comments</span>
                                </div>
                                <p>
                                   Gunung memiliki keindahan alami yang luar biasa, tak peduli musim apapun gunung selalu nampak fotogenik. puncak Gunung dengan batu yang menjulang, serta pegunungan disekitarnya merupakan landskap alam yang sempurna. Musim memiliki pengaruh tersendiri terhadap gambar yang dihasilkan, lain hal jika musim kemarau dan dedaunan mengering, maka gambar kecoklatan yang akan kita dapatkan. Untuk mengabadikan gambar landscape diperlukan lensa wide angle dengan bantuan filter, dalam hal ini bisa filter ND(Neutral Density) dan CPL(Circular Polarizer) yang akan memberikan efek-efek khusus, dan sangat membantu saat kondisi cahaya berlebih.
                                </p>
                            </div>
                        </article>
                        <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="assets/img/blog/blog3.png" alt="blog title " />
                                <div class="blog_date">
                                    19
                                    <span>
                                        januari 2018
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                        prewedding is beutiful
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>By Makrus ali</span>
                                    <span>Design, Inspiration, Creative</span>
                                    <span>2 Comments</span>
                                </div>
                                <p>
                                   disini menampilkan kecantikan dalam memotret prewed dengan menggunakan visual dan lighthing yang harus bagus dimana tata letak untuk memotret harus sesua dengan keadaan sekitarnya dan dapat menampilkan hasil yang sempurna 
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/slick.min.js"></script>
<!--Portfolio Filter-->
<script src="assets/js/imgloaded.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>