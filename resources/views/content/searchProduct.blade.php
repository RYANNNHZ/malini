@extends('home')

@section('konten')
    <div class="container">
        <div class="row">

            <div class="row my-5">
                @foreach ($products as $product)
                <x-card-products :product="$product"></x-card-products>
                @endforeach
            </div>

        </div>
    </div>
@endsection
