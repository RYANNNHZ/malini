@extends('template')

@section('konten')
    <div class="container-fluid container-md">

        <div class="row d-flex my-3">
            <x-navigation-header :product="$product" navigate="product"></x-navigation-header>
        </div>

        <div class="row">

            <div class="col-12 col-md-12 col-lg-6 d-none d-md-block">
                <x-image-product :image="$product->image_url"></x-image-product>
            </div>

            <div class="col-12 col-md-12 col-lg-6 my-2">
                <x-card-product :image="$product->image_url" :title="$product->product_name" :description="$product->description" :rating="$product->ratings" :price="$product->price"></x-card-product>


                <div class="col-12 col-md-12 col-lg-12 my-2">
                    <div class="card shadow-0 border rounded-4">
                        <div class="card-body p-4">
                            @if (Auth::user())
                            <x-comment-prompt :productId="$product->id"></x-comment-prompt>
                            @else

                            @endif

                            @foreach ($product->comments as $comment)
                            <x-comments :comment="$comment"></x-comments>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
