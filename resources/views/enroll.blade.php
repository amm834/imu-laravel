@extends('layout.main')
@section('content')
    <div class="container">
        <h1 class="text-center fw-bold">Enrollment Form</h1>
        <form action="{{route('enroll')}}" method="post">
            @csrf
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-3">Student Information</h1>

                {{--            Alert--}}
                @if(session()->has('register_failed'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('register_failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{--            Alert End--}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="exampleFormControlInput1">
                    @error('full_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E Mail</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" id="exampleFormControlInput1">
                    @error('date_of_birth')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian Name</label>
                    <input type="text" name="guardian_name" class="form-control" id="exampleFormControlInput1">
                    @error('guardian_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian Phone Number
                    </label>
                    <input type="number" name="guardian_phone_number" class="form-control"
                           id="exampleFormControlInput1">
                    @error('guardian_phone_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <textarea name="address" class="form-control"
                              id="exampleFormControlInput1"></textarea>
                    @error('address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Registration Date</label>
                    <input type="date" name="registration_date" class="form-control">
                    @error('registration_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Courses</label>
                    <select class="form-select" aria-label="Default select example" name="course_name   ">
                        <option selected>Select Your Course</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    @error('course_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Payment Type</label>
                    <select class="form-select" aria-label="Select Your Payment" name="payment_type">
                        <option>Open this select menu</option>
                        <option value="1">KBZ</option>
                        <option value="2">CB</option>
                        <option value="3">Wave Money</option>
                    </select>
                    @error('payment_type')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                    <input type="number" name="amount" class="form-control">
                    @error('amount')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-3 text-end">
                    <button class="btn btn-danger">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </div>
            </div>
        </form>
    </div>
@endsection
