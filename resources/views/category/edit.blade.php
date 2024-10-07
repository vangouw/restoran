@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
            {{Session::get('message')}}
            </div>
            @endif
            <form action="{{ route('category.update',[$category->id]) }}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                    <div class="card-header">Update Food Category</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control
                            @error('name') is-invalid @enderror" value="{{$category->name}}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
