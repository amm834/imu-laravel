@extends('layout.main')
@section('content')
    <div class="container my-3 h-75">
        <h1 class="display-6 text-center">Eagle Moutain College</h1>
        <div class="col-md-8 offset-md-2 mt-5">
            <p class="text-center my-3">
                <i class='bx bxs-user bx-lg'></i>
            </p>
            <h1 class="fw-bold text-center my-3">Login</h1>

            {{--            Alert--}}
            @if(session()->has('login_fail'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('login_fail') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{--            Alert End--}}

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                           placeholder="">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>


@endsection
