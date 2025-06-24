<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    {{-- {{ dd(session("active")) }} --}}
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            @if (session("locale") == "vi")
                <div class="language-option">
                    <img src="img/vnflag.png" alt="">
                    <span>VI<i class="fa fa-angle-down"></i></span>
                    <div class="flag-dropdown">
                        <ul>
                            <li><a href="/lang/vi">Vi</a></li>
                            <li><a href="/lang/en">En</a></li>
                        </ul>
                    </div>
                </div>
            @elseif (session("locale") == "en")
                <div class="language-option">
                    <img src="img/flag.jpg" alt="">
                    <span>EN<i class="fa fa-angle-down"></i></span>
                    <div class="flag-dropdown">
                        <ul>
                            <li><a href="/lang/vi">Vi</a></li>
                            <li><a href="/lang/en">En</a></li>
                        </ul>
                    </div>

                </div>
            @endif
            <a href="#" class="bk-btn">Book Now!</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="linkcheck" id="home"><a href="#"> {{ __("messages.Home") }} </a></li>
                <li class="linkcheck" id="room"><a href="#">{{ __("messages.Rooms") }}</a></li>
                <li class="linkcheck" id="about"><a href="#">{{ __("messages.AboutUs") }}</a></li>
                <li class="linkcheck" id="other"><a href="#">{{ __("messages.Pages") }}</a>
                    <ul class="dropdown">
                        <!-- <li><a href="#">Room Details</a></li> -->
                        <li><a href="#">Phòng Thượng Hạng</a></li>
                        <li><a href="#">Phòng gia đình</a></li>
                        <li><a href="#">Phòng Tổng Thống</a></li>
                    </ul>
                </li>
                <li class="linkcheck" id="news"><a href=""> {{ __("messages.News") }} </a></li>
                <li class="linkcheck" id="contact"><a href="">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0865091023</li>
            <li><i class="fa fa-envelope"></i> tamuon00@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->
    {{-- {{ App::getLocale() }} --}}
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 0865091023</li>
                            <li><i class="fa fa-envelope"></i> tamuon00@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Booking Now</a>
                            @if (session("locale") == "vi" || session("locale") == null || session("locale") == "")
                                <div class="language-option">
                                    <img src="img/vnflag.png" alt="">
                                    <span>VI<i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="/lang/vi">Vi</a></li>
                                            <li><a href="/lang/en">En</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @elseif (session("locale") == "en")
                                <div class="language-option">
                                    <img src="img/flag.jpg" alt="">
                                    <span>EN<i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="/lang/vi">Vi</a></li>
                                            <li><a href="/lang/en">En</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <a class="btn btn-primary" href="{{ route('logout') }}"> <i class="lni lni-exit"></i> Sign
                                Out </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route("client.index") }}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="linkcheck" id="home"><a href="{{ route("client.index") }}">{{ __("messages.Home") }}</a></li>
                                    <li class="linkcheck" id="room"><a href="#"> {{ __("messages.Rooms") }} </a>
                                    <ul class="dropdown">
                                            <!-- <li><a href="#">Room Details</a></li> -->
                                            <li><a href="#">Phòng Thượng Hạng</a></li>
                                            <li><a href="#">Phòng gia đình</a></li>
                                            <li><a href="#">Phòng Tổng Thống</a></li>
                                        </ul>
                                    </li>
                                    <li class="linkcheck" id="about"><a href="{{ route("client.about") }}">{{ __("messages.AboutUs") }}</a></li>
                                    <li class="linkcheck" id="other"><a href="./pages.html">{{ __("messages.Pages") }}</a></li>
                                    <li class="linkcheck" id="news"><a href="./blog.html">{{ __("messages.News") }}</a></li>
                                    <li class="linkcheck" id="contact"><a href="{{ route("client.contact") }}">{{ __("messages.Contact") }}</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->



    @yield("main")





    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(12) 345 67890</li>
                                <li>info.colorlib@gmail.com</li>
                                <li>856 Cordia Extension Apt. 356, Lake, United State</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
        <script>
          //  document.addEventListener("DOMContentLoaded", function() {
        const checkactive = @json(session("active"));
        const current = document.getElementById("current");
        if (current) {
            if(checkactive.includes(current.innerText)){
                let linklist = document.querySelectorAll(".linkcheck");
                linklist.forEach(link => {
                    if(link.id === current.innerText){
                        link.classList.add("active");
                    }
                });
            }
        }
    // });
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>