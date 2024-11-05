@extends('template')

@section('konten')

<div class="container-fluid">
    <div class="container">
        
        <x-navigation-header :product="null" ></x-navigation-header>

        <div class="row">
            <div class=" offset-3 col-6">
                <div class="card text-start p-5 d-inline-block">
                    <img class="card-img-top w-50" src="https://avatar.iran.liara.run/username?username={{ Auth::user()->username }}" alt="Title" />
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
