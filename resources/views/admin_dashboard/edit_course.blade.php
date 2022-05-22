@extends('admin_layout.main')
@section('content')
    <div class="container my-3 h-75 col-md-6 offset-md-3">
        <h1 class="display-6 text-center my-3">Add New Course</h1>
        <form action="{{route('admin.courses.update',$course->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                       value="{{$course->name}}"
                >
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First Sem Fee</label>
                <input type="number" value="{{$course->first_sem_fee}}" name="first_sem_fee" class="form-control"
                       id="exampleFormControlInput1">
                @error('first_sem_fee')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Second Sem Fee</label>
                <input type="number" name="second_sem_fee" value="{{$course->second_sem_fee}}" class="form-control"
                       id="exampleFormControlInput1">
                @error('second_sem_fee')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-success float-end">Update</button>
            </div>
        </form>
    </div>
    </div>


@endsection
