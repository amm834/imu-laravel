@extends('admin_layout.main')
@section('content')
    <div class="container my-3 h-75 col-md-6 offset-md-3">
        <h1 class="display-6 text-center my-3">Add New Course</h1>
        <form action="{{route('admin.courses.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First Sem Fee</label>
                <input type="number" name="first_sem_fee" class="form-control" id="exampleFormControlInput1">
                @error('first_sem_fee')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Second Sem Fee</label>
                <input type="number" name="second_sem_fee" class="form-control" id="exampleFormControlInput1">
                @error('second_sem_fee')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-success float-end">Create</button>
            </div>
        </form>
    </div>
    </div>


@endsection
