@extends('layout.main')
@section('content')
    <div class="container h-75">
        <h1 class="display-6 text-center my-4">Eagle Moutain College</h1>
        <h1 class="my-3 display-6 fw-bold">Courses And Fees</h1>
        <h1 class="my-3 display-6">Undergraduate Student</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Courses</th>
                <th scope="col">1st Sem Fees</th>
                <th scope="col">2nd Sem Fees</th>
                <th scope="col">Per Year Fees</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <th scope="row">{{$course->name}}</th>
                    <td>${{$course->first_sem_fee}}</td>
                    <td>${{$course->second_sem_fee}}</td>
                    <td>${{$course->total_fee}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
