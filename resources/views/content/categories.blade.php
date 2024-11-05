@extends('home')

@section('konten')
    <div class="container">
        <div class="row">

            <div class="row">
                @foreach ($categories as $category)
                <x-card-categories :category="$category"></x-card-categories>
                @endforeach

            </div>

        </div>
    </div>
@endsection
