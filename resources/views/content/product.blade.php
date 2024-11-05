@extends('template')

@section('konten')
    <div class="container-fluid container-md">
        <div class="row d-flex my-3">
            <div class="col-4 text-start wrapper-backhome">
                <a style="" class="btn btn-light text-dark rounded-5" href="/product"><i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="col-4 text-center wrapper-title">
                <h5 class="">malini.<i class="bi bi-tree-fill"></i></h5>
            </div>
            <div class="col-4 text-end wrapper-bookmark">
                @foreach ($product->categories as $category)
                    <a class="btn btn-light text-dark rounded-5 fw-bold"
                        href="/category/{{ $category->id }}">{{ $category->category_name }}</a>
                @endforeach
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-12 col-lg-6 d-none d-md-block">
                <div class="card text-start rounded-4 p-3">
                    <img class="card-img-top" src="{{ $product->image_url }}" alt="Title" />
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6 my-2">
                <x-card-product :image="$product->image_url" :title="$product->product_name" :description="$product->description" :rating="$product->ratings" :price="$product->price"></x-card-product>


                <div class="col-12 col-md-12 col-lg-12 my-2">
                    <div class="card shadow-0 border rounded-4">
                        <div class="card-body p-4">
                            @if (Auth::user())

                            <div data-mdb-input-init class="form-outline mb-4">
                                <form action="/comment" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" value="{{ $product->id }}" name="idproduct">
                                    {{-- <input type="text" id="addANote" class="form-control" placeholder="Type comment..." /> --}}
                                    <textarea name="coment" class="form-control" placeholder="type comment..." id="" cols="10"
                                    rows="3"></textarea>
                                    <button type="submit" class="btn btn-dark my-3">add comment</button>
                                </form>
                            </div>
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
