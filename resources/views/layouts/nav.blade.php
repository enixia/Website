<nav class="navbar navbar-default bootsnav navbar-fixed white no-background">
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <img src="{{asset('storage/app/images/template/logo.png') }}" class="logo logo-display" alt="">
                <img src="{{asset('storage/app/images/template/footer-logo.png') }}" class="logo logo-scrolled" alt="">
            </a>

        </div>
        <!-- End Header Navigation -->

        <!-- navbar menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="{{route('welcome')}}">Home</a></li>

                <li class="dropdown">

                    <a href="{{route('welcome')}}" data-toggle="dropdown" class="dropdown-toggle">Enigmes</a>

                    <ul class="dropdown-menu">

                        <li><a href="{{route('enigma.1')}}">Enigme 1</a></li>

                        <li><a href="{{route('enigma.2')}}">Enigme 2</a></li>
                        <li class="divider"></li>

                        <li><a href="{{route('enigma.3')}}">Enigme 3</a></li>

                    </ul>

                </li>

                <li><a href="{{route('about')}}">A propos</a></li>

    </div>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
