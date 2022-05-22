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
                    <a class="nav-link activeø" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
                </li>
                @if(!session()->has('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enroll')}}">Enrollment</a>
                    </li>
                @endif

                @if(!session()->has('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                @endif
                @if(session()->has('admin') && session()->get('admin.role') === 'student')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Student Dashboard</a>
                    </li>
                @endif
                @if(session()->has('admin') && session()->get('admin.role') === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">Admin Dashboard</a>
                    </li>
                @endif
                @if(session()->has('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

{{--    Navbar End--}}
