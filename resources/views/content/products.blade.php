@extends('home')

@section('konten')
    <div class="container">
        <div class="row">

            <video autoplay muted playsinline loop src="videoplayback.webm" class="w-100 my-3 rounded-5"></video>



            <div class="row my-5">
                <div class="col text-center">
                    <h1 class="display-4 font-weight-bolder text-dark"><b>Malini Perfume <i class="bi bi-tree-fill"></i></b></h1>
                    <p class="lead">Premium Perfume at Affordable </p>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                <x-card-products :product="$product"></x-card-products>
                @endforeach
            </div>

        </div>
    </div>
@endsection
