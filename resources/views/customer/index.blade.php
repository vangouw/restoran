@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">All Customers
                    <a href="{{ route('customer.create')}}" class="btn btn-outline-warning" style="float: right;">Create</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!is_null($customers) && count($customers) > 0)
                            @foreach($customers as $key => $customer)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4">No customers to display.</td>
                        </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
