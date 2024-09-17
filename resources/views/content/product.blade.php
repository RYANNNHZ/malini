@extends('template')

@section('konten')
    <div class="container-fluid container-md">
        <div class="row d-flex my-3">
            <div class="col-4 text-start wrapper-backhome">
                <a style="" class="btn btn-light text-dark rounded-5" href="/product"><i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="col-4 text-center wrapper-title">
                <h5 class="">Rafee.<i class="bi bi-cup-fill"></i></h5>
            </div>
            <div class="col-4 text-end wrapper-bookmark">
                <a class="btn btn-light text-dark rounded-5" href=""><i class="bi bi-bookmark-fill"></i></a>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-12 col-lg-6 d-none d-md-block">
                <div class="card text-start rounded-4 p-3">
                    <img class="card-img-top" src="{{ $product->image_url }}" alt="Title" />
                    {{-- <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                        </div> --}}
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6 my-2">
                <div class="card text-start rounded-4 p-3">
                    <img class="card-img-top d-md-none d-block" src="{{ $product->image_url }}" alt="Title" />
                    <div class="card-body d-flex justify-content-between">
                        <div class="wrapper-title w-50">
                            <h4 class="card-title fw-bold">{{ $product->product_name }}</h4>
                            <p style="background-color: " class="text-secondary">{{ $product->description }}</p>
                        </div>
                        <div class="wrapper-rating w-50 d-inline-block">

                            <p style="background-color:#ffeecb; color:#EB9B00; "
                                class="text-warning ms-auto px-2 w-50 w-md-100 text-center rounded-5">5 <i
                                    class="bi bi-star-fill"></i></p>

                            @foreach ($product->categories as $category)
                                <p class="text-secondary text-end">{{ $category->category_name }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-body d-block d-md-flex">
                        <div class="wrapper-price w-50">
                            <h3>{{ $product->price }}K</h3>
                        </div>
                        <div class="wrapper-addCart w-100 w-md-50 d-block d-md-flex">
                            <a class="btn btn-dark w-100 my-1 my-md-0 rounded-5">checkout<i
                                    class="mx-1 bi bi-basket-fill"></i></a>
                            <a class="btn btn-dark w-100 my-1 my-md-0 rounded-5 ms-md-1">add cart<i
                                    class="mx-1 bi bi-cart-check-fill"></i></a>
                        </div>
                    </div>
                </div>


                    <div class="col-12 col-md-12 col-lg-12 my-2">
                      <div class="card shadow-0 border rounded-4" >
                        <div class="card-body p-4">
                          <div data-mdb-input-init class="form-outline mb-4">
                            {{-- <input type="text" id="addANote" class="form-control" placeholder="Type comment..." /> --}}
                            <textarea name="" class="form-control" placeholder="type comment..." id="" cols="10" rows="3"></textarea>
                            <a href="" class="btn btn-dark my-3">add comment</a>
                          </div>

                          @foreach ($product->coments as $comment)
                          <div class="card mb-4 rounded-4">
                            <div class="card-body rounded-4" style="background-color: #f0f2f5;">
                              <p>{{ $comment->coment_text }}</p>
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <img src="https://avatar.iran.liara.run/public" alt="avatar" width="25"
                                    height="25" />
                                  <p class="small mb-0 ms-2">{{ $comment->user->username }}</p>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <i class="far fa-thumbs-up mx-2 fa-xs text-body" style="margin-top: -0.16rem;"></i>
                                  <p class="small text-muted mb-0">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                      </div>
                    </div>


            </div>
        </div>
    </div>
@endsection
