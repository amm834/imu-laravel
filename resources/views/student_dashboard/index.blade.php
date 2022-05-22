@extends('layout.main')
@section('content')
    <div class="container">
        {{-- Delete Alert--}}
        @if(session()->has('student_delete_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('student_delete_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--         Delete   Alert End--}}
        <div class="col-md-8 offset-md-2 py-3">
            <div class="card">
                <div class="card-header">Your Information</div>
                <div class="card-body">
                    <h5 class="card-title">{{$student->full_name}}</h5>
                    <ul class="list-group my-3">
                        <li class="list-group-item">{{$student->email}}</li>
                        <li class="list-group-item">{{$student->date_of_birth}}</li>
                        <li class="list-group-item">{{$student->phone_number}}</li>
                        <li class="list-group-item">{{$student->guardian_name}}</li>
                        <li class="list-group-item">{{$student->guardian_phone_number}}</li>
                        <li class="list-group-item">{{$student->registration_date}}</li>
                        <li class="list-group-item">{{$student->payment_type}}</li>
                        <li class="list-group-item">{{$student->amount}}</li>
                    </ul>
                    <form action="{{route('student.delete',$student->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="text" class="btn btn-danger float-end">Delete
                            Account
                        </button>
                    </form>

                </div>
            </div>

            {{--            Enrolled Course --}}
            <div class="card my-3">
                <div class="card-header">Enrolled Course</div>
                <div class="card-text p-3">
                    <h1>{{ $course->name }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
