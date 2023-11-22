@if (request()->routeIs('home.events.details'))
<header class="main_header inner_pages_header homepage_header white_header">

@else
<header class="main_header homepage_header ">
@endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <div class="mobile_left">
            <!-- Navbar Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
                <img src="{{url('images/logo.png')}}" alt="Logo" width="100">
            </a>

            </div>


            <div class="mobile_icons">
                <a href="#" data-bs-toggle="modal" data-bs-target="#search_model">
                    <img src="{{url('images/search_mobile.svg')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{url('images/mobileuser.svg')}}" alt="">
                </a>		        
            </div>	
            
            
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/events">events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/matches">Matches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('videos')}}">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('teams')}}">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('players')}}">Players</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('rankings')}}">Rankings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('latest_news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacts</a>
                    </li>

                </ul>
            </div>

            <!-- Search Icon -->
            <form class="form-inline my-2 my-lg-0 search_btn">
                <button class="search_btn" type="submit">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#search_model"><img src="{{url('images/search.svg')}}" class="img_search" alt="search"></a>
                </button>
            </form>

            <!-- Login Button -->
            @guest()
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-homepage login_btn btn-outline-primary ml-2">Log in <img src="{{url('images/login_arrow.svg')}}" alt=""></a>

            @else
            <a href="/account"  class="btn btn-homepage login_btn btn-outline-primary ml-2">Dashboard</a>
     
            @endguest
           
        </div>
    </nav>
</header>