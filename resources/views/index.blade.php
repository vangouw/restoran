@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($categories as $category)

        <div class="col-md-12">
            <h2 style="color: gray">{{ $category->name }}</h2>
            <div class="row">
                @foreach(App\Models\Food::where('category_id',$category->id)->get() as $food)

                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('image') }}/{{ $food->image }}" alt="{{ $food->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->name }}</h5>
                            <p class="card-text">
                                <strong>Price:</strong> Rp.{{ $food->price }}
                            </p>
                            <a href="{{ route('detail', $food->id) }}" class="btn btn-outline-danger btn-sm">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection