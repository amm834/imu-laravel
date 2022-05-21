@extends('layout.main')
@section('content')
    <div class="container">
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
            <tr>
                <th scope="row">IT</th>
                <td>$350</td>
                <td>$425</td>
                <td>$775</td>
            </tr>
            <tr>
                <th scope="row">IBM</th>
                <td>$225</td>
                <td>$300</td>
                <td>$525</td>
            </tr>
            </tbody>
        </table>
        <h1 class="my-3 display-6 mt-5">Graduate Student</h1>
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
            <tr>
                <th scope="row">IT Bsc</th>
                <td>$350</td>
                <td>$425</td>
                <td>$775</td>
            </tr>
            <tr>
                <th scope="row">IBM Bsc</th>
                <td>$350</td>
                <td>$425</td>
                <td>$775</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection