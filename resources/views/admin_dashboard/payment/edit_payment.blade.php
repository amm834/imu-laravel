@extends('admin_layout.main')
@section('content')
    <div class="container my-3 h-75 col-md-6 offset-md-3">
        <form action="{{route('payments.update',$payment->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Payment Name</label>
                <input type="text" name="name" value="{{$payment->name}}" class="form-control"
                       id="exampleFormControlInput1">
                @error('name')
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
