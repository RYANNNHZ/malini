@extends('index')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex my-3">
                <div class="col-4 text-start wrapper-backhome">
                    <a style="" class="btn btn-light text-dark rounded-5" href=""><i class="bi bi-arrow-left"></i></a>
                </div>
                <div class="col-4 text-center wrapper-title">
                    <h5 class="">Rafee.<i class="bi bi-cup-fill"></i></h5>
                </div>
                <div class="col-4 text-end wrapper-bookmark">
                    <a class="btn btn-light text-dark rounded-5" href=""><i class="bi bi-bookmark-fill"></i></a>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-start rounded-4 p-3">
                        <img class="card-img-top" src="{{ $product->image_url }}" alt="Title" />
                        {{-- <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-start rounded-4 p-3">
                        {{-- <img class="card-img-top" src="{{ $product->image_url }}" alt="Title" /> --}}
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->product_name }}</h4>
                            <p class="card-text">Body</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
