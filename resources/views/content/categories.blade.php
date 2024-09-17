@extends('home')

@section('konten')
    <div class="container">
        <div class="row">

            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-12 col-md-6 col-lg-4 mb-4 my-5">

                        <div class="card text-dark card-has-bg click-col"
                            style="background-image:url('{{ $category->image_url }}');https">
                            <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                            <a href="">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0"><a class="text-dark text-decoration-none"
                                                herf="https://creativemanner.com">{{ $category->category_name }}</a></h4>
                                        {{-- <small class="card-meta mb-2">{{ $category->description }}</small> <br> --}}
                                        <small><i
                                                class="far fa-clock"></i></small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            {{-- <img class="mr-3 rounded-circle"
                                    src="https://cdn.prod.website-files.com/5eb6815bc8e0bd376c3cae22/63f4d41751276dcd710fcc5c_kopi%20kenangan.jpg"
                                    alt="Generic placeholder image" style="max-width:50px"> --}}
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="">
                                                </div>

                                                <div class="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
