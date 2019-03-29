<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>

        <title>{{config('app.name')}}</title>
        @include('layouts/meta')
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('storage/app/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/bootsnav.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/css/swiper.min.css')}}">
        @yield('css')
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" style=" background:url({{asset('storage/app/images/template/bodybg.png')}}) repeat-y;">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->

            @include('layouts/nav')

            @yield('content')


                        <footer id="footer" class="footer bg-black">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <nav class="navbar navbar-default bootsnav footer-menu no-background">
                                            <div class="container">

                                                <!-- Start Atribute Navigation -->
                                                <div class="attr-nav">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- End Atribute Navigation -->


                                                <!-- Start Header Navigation -->
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-footer">
                                                        <i class="fa fa-bars"></i>
                                                    </button>
                                                    <a class="navbar-brand" href="#brand"><img src="{{asset('storage/app/images/template/footer-logo.png') }}" class="logo" alt=""></a>
                                                </div>
                                                <!-- End Header Navigation -->

                                                <!-- navbar menu -->
                                                <div class="collapse navbar-collapse" id="navbar-footer">
                                                    <ul class="nav navbar-nav navbar-center">
                                                        <li><a href="#home">Home</a></li>
                                                        <li><a href="#features">Features</a></li>
                                                        <li><a href="#reviews">Reviews</a></li>
                                                        <li><a href="#download">Download</a></li>
                                                    </ul>
                                                </div><!-- /.navbar-collapse -->
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="col-md-12">
                                        <div class="main_footer text-center p-top-40 p-bottom-30">
                                            <p class="wow fadeInRight" data-wow-duration="1s">
                                                Made with
                                                <i class="fa fa-heart"></i>
                                                by
                                                <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a>
                                                2016. All Rights Reserved
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                      </div>

                      <script
                      			  src="http://code.jquery.com/jquery-1.11.2.min.js"
                      			  integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA="
                      			  crossorigin="anonymous"></script>


                      <script src="{{asset('storage/app/js/jquery.magnific-popup.js')}}"></script>
                      <script src="{{asset('storage/app/js/jquery.easing.1.3.js')}}"></script>
                      <script src="{{asset('storage/app/js/swiper.min.js')}}"></script>
                      <script src="{{asset('storage/app/js/jquery.collapse.js')}}"></script>
                      <script src="{{asset('storage/app/js/bootsnav.js')}}"></script>



                      <script src="{{asset('storage/app/js/plugins.js')}}"></script>
                      <script src="{{asset('storage/app/js/main.js')}}"></script>
                      @yield('js')
                  </body>
              </html>
