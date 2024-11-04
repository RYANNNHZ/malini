@extends('home')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="text-dark">category : {{ $category->category_name }} </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <x-card-products :product="$product"></x-card-products>
            @endforeach
        </div>

    </div>
@endsection
