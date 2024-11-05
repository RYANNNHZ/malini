@extends('template')

@section('konten')

<div class="container-fluid">
    <div class="container">

        <div class="row d-flex my-3">
            <x-navigation-header :product="null" navigate="product"></x-navigation-header>
        </div>

        <div class="row">
            <x-profile></x-profile>
        </div>
    </div>
</div>

@endsection
