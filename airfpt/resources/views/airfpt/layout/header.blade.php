<header class="navbar navbar-expand-md py-2 navbar-light bg-light fixed-top font-weight-bold" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{Route('airfpt.index')}}"><img width="200" src="{{ asset('img/logo/prj_logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_menu">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="header_menu">
            <ul class="headerlink nav navbar-nav text-light"> 
                <li class="nav-item"><a href="{{Route('airfpt.index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.user.pass_info')}}" class="nav-link">Booking information</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.user.homeNews')}}" class="nav-link">News</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.faqs')}}" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                @auth 
                <li class="nav-item"><a href="{{Route('airfpt.user.create_comment')}}" class="nav-link">Feedback</a></li>
                @endauth  
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            @guest
                <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"> <span class="caret">Login</span></button>
                    <div class="dropdown-menu dropdown-menu-right rounded" >
                        <form class="px-3 py-3 bg-light">
                            <li class="nav-item">
                                <a href="{{Route('airfpt.mem_login')}}" class="nav-link">
                                    <p>Login<hr></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('airfpt.mem_register')}}" class="nav-link">
                                    <p>Register<hr></p>
                                </a>
                            </li>
                        </form>
                    </div>
                @endguest


                @auth
                    <!-- Add icons to the links using the .nav-icon class with font-
                    awesome or any other icon font library -->
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"> <span class="caret">Member {{Auth::user()->username}}</span></button>
                    <div class="dropdown-menu dropdown-menu-right rounded" >
                        <form class="px-3 py-3 bg-light">
                            <li class="nav-item">
                                <a href="{{Route('airfpt.mem_detail')}}" class="nav-link">
                                    <p>Account Detail<hr></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Booking History<hr></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('logout')}}" class="nav-link">
                                    <p>Log Out</p>
                                </a>
                            </li>
                        </form>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</header>