@extends('template')

@section('konten')
    <div class="container-fluid">

        <div class="container">

            <div class="row d-flex my-3">
                <x-navigation-header :product="null" navigate="product"></x-navigation-header>
            </div>

            <div class="row">
                @foreach (Auth::user()->products as $product)
                    <div class="col-12 my-2">
                            <div class="d-flex">
                                <!-- Gambar produk -->
                                <img src="{{ $product->image_url }}" class="img-fluid w-25 h-25 h-md-100" alt="Product Image">
                                <!-- Isi card -->
                                <div class="card-body d-flex flex-column w-100 p-2">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <h4 class="text-black">{{ $product->product_name }}</h4>
                                    <p>{{$product->description}}</p>
                                    <p class="card-text">Price: <strong>${{ number_format($product->price, 2) }}</strong></p>

                                    {{-- <p class="card-text">
                                        @if ($product->pivot->is_checkout)
                                            <span class="badge bg-success">Checked Out</span>
                                        @else
                                            <span class="badge bg-warning">Not Checked Out</span>
                                        @endif
                                    </p> --}}
                                    <!-- Tombol disabled -->
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group w-auto ">
                                            <button class="btn btn-dark" onclick="changeQty(-1)">-</button>
                                            <input type="number" id="qty" class="form-control text-center" value="{{ $product->qty ?? 1 }}" min="1">
                                            <button class="btn btn-dark" onclick="changeQty(1)">+</button>
                                        </div>
                                        <button class="btn btn-dark w-25" disabled><i class="bi bi-cart"></i></button>
                                    </div>
                                </div>
                            </div>

                    </div>
                @endforeach
                <div class="col-12 my-3">
                    <button class="btn btn-dark w-100" disabled>Checkout All Items</button>
                </div>
            </div>
        </div>
    </div>
@endsection
