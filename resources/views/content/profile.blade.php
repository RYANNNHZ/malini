@extends('template')

@section('konten')

<div class="container-fluid">
    <div class="container">
        <div class="row d-flex my-3">
            <div class="col-4 text-start wrapper-backhome">
                <a style="" class="btn btn-light text-dark rounded-5" href="/product"><i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="col-4 text-center wrapper-title">
                <h5 class="">malini.<i class="bi bi-tree-fill"></i></h5>
            </div>
            <div class="col-4 text-end wrapper-bookmark">

            </div>
        </div>
        <div class="row">
            <div class=" offset-3 col-6">
                <div class="card text-start p-5 d-inline-block">
                    <img class="card-img-top w-50" src="https://avatar.iran.liara.run/public" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{ Auth::user()->username }}</h4>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
