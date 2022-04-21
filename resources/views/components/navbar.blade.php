<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="{{route('home')}}">Primago</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('template')}}/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>

                <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                    </ul>
                </li>
                <li><a href="{{route('service')}}">Services</a></li>
                <li><a href="#">Testimonial</a></li>
                <li><a href="#">Blog</a></li>

                <li><a href="contact.html">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
