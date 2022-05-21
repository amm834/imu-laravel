@extends('admin_layout.main')
@section('content')
    <div class="container my-5">
        <h1 class="display-6 my-3">Admin Dashboard</h1>
        {{--       Delete     Alert--}}
        @if(session()->has('student_delete_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('student_delete_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--         Delete   Alert End--}}
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date Of Birth</th>
                    <th>Phone Number</th>
                    <th>Guardian Name</th>
                    <th>Guardian Phone Number</th>
                    <th>Address</th>
                    <th>Registration Date</th>
                    <th>Payment Type</th>
                    <th>Amount</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <th>{{$student->id}}</th>
                        <td>{{$student->full_name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->date_of_birth}}</td>
                        <td>{{$student->phone_number}}</td>
                        <td>{{$student->guardian_name}}</td>
                        <td>{{$student->guardian_phone_number}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->registration_date}}</td>
                        <td>{{$student->payment_type}}</td>
                        <td>{{$student->amount}}</td>
                        <td>
                            <form action="{{route('student.delete',$student->id)}}" method="post">
                                @method('delete')
                                @csrf

                                <button class="btn btn-danger"
                                        @if($student->role === 'admin')
                                             disabled
                                        @endif
                                        type="submit"
                                >Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
