@extends('admin_layout.main')
@section('content')
    <div class="container col-md-6 offset-md-3">

        {{--            Alert--}}
        @if(session()->has('course_delete_success'))
            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                {{ session()->get('course_delete_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--            Alert End--}}

        {{--       Course     Alert--}}
        @if(session()->has('create_course_success'))
            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                {{ session()->get('create_course_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--            Alert End--}}
        <h1 class="display-6 my-3">Courses</h1>
        <a href="{{route('admin.courses.create')}}" class="btn btn-success my-3 float-end">Add New Course</a>
        <table class="table caption-top">
            <caption>List of courses</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>First Sem Fee</th>
                <th>Second Sem Fee</th>
                <th>Total Fee</th>
                <th>Name</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->first_sem_fee}}$</td>
                    <td>{{$course->second_sem_fee}}$</td>
                    <td>{{$course->total_fee}}$</td>
                    <td class="text-end">
                        <form action="{{route('admin.courses.edit',$course->id)}}" method="get">
                            @csrf
                            <button class="btn btn-info">Edit</button>
                        </form>
                    </td>
                    <td class="text-start">
                        <form action="{{route('admin.courses.delete',$course->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Courses</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
@endsection
