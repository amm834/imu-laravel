{{--        Navbar Start--}}
<nav class="navbar navbar-expand-lg" style="background-color:#82d682 ;">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" alt="Logo" width="64" height="64">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link activeø" aria-current="page" href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link activeø" aria-current="page" href="{{route('admin.courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link activeø" aria-current="page" href="{{route('payments.index')}}">Payments</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
{{--    Navbar End--}}
