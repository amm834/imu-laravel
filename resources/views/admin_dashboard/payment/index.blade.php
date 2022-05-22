@extends('admin_layout.main')
@section('content')
    <div class="container col-md-6 offset-md-3">

        {{--            Alert--}}
        @if(session()->has('payment'))
            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                {{ session()->get('payment') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--            Alert End--}}

        <h1 class="display-6 my-3">Pyaments</h1>
        <a href="{{route('payments.create')}}" class="btn btn-success my-3 float-end">Add New Payment</a>
        <table class="table caption-top">
            <caption>List of courses</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($payments as $payment)
                <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->name}}</td>
                    <td class="text-end">
                        <form action="{{route('payments.edit',$payment->id)}}" method="get">
                            @csrf
                            <button class="btn btn-info">Edit</button>
                        </form>
                    </td>
                    <td class="text-start">
                        <form action="{{route('payments.destroy',$payment->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Payments</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
@endsection
