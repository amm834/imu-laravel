@extends('layout.main')
@section('content')
    {{--    Home Section Start--}}
    <main class="container">
        <h1 class="display-6 text-center my-3">Welcome To Eagle Mountain College</h1>
        <div class="row col-md-12 my-5">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/front-image-one.jpg') }}" alt="Image Here" width="500">
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/front-image-two.jpg') }}" alt="Image Here" width="500">
            </div>
        </div>
        <div class="text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus ad aliquam beatae cumque eaque
                eveniet, excepturi illum laborum minus, nam neque nisi perspiciatis quibusdam quo quos recusandae
                tempora, voluptatem.</p>
        </div>
    </main>
    {{--    Home Section End--}}

@endsection