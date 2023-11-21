<nav id="navbar" class="navbar navbar-expand-lg sticky-top p-0 ">
    <div class="container-fluid">
       
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link fs-4" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item mx-3 ">
                    <a class="nav-link fs-4" {{--href="{{route('artwork.index')}}"--}}>i miei prodotti</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fs-4" {{--href="{{route('index.form')}}"--}}>Contact-us</a>
                </li>
            </ul>
            @auth
            <li class="nav-link dropdown mx-5">
                <a class="btn mybtn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                    <li class="d-flex justify-content-center">
                        <a class="btn mybtn border-0 p-2" {{--href="{{route('artwork.create')}}"--}}>Insert Artwork</a>
</li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="d-flex justify-content-center">
                        <form action="{{route('logout')}}"method="post">
                        @csrf
                        <button class="btn btn-outline-danger">Logout</button>
                    </form></li>
                </ul>
            </li>
            @else
            <button class="px-3 btn mybtn mx-3" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
            <button class="px-3 btn mybtn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            @endauth
        </div>
    </div>
</nav>