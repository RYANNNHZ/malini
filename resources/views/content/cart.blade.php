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
                                    <div class="d-md-flex justify-content-between justif">
                                        <div class="input-group w-auto ">
                                            <a href="/minQty/{{ $product->pivot->id }}" class="btn btn-dark" onclick="changeQty(-1)">-</a>
                                            <input type="number" id="qty_{{ $product->id }}" class="form-control text-center" value="{{ $product->pivot->qty ?? 1 }}" min="1" onchange="updateQty({{ $product->id }}, this.value)">

                                            <a href="/addQty/{{ $product->pivot->id }}" class="btn btn-dark" onclick="changeQty(1)">+</a>
                                        </div>
                                        <div class="wrapper-btn w-md-50 my-2 d-flex">
                                            <form action="/cart/{{ $product->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning w-md-25"><i class="bi bi-back"></i></button>
                                            </form>
                                            <button class="btn btn-dark w-md-25 mx-2" disabled><i class="bi bi-cart"></i></button>
                                        </div>

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

                                   {{-- <p class="card-text">
                                        @if ($product->pivot->is_checkout)
                                            <span class="badge bg-success">Checked Out</span>
                                        @else
                                            <span class="badge bg-warning">Not Checked Out</span>
                                        @endif
                                    </p> --}}
                                    <!-- Tombol disabled -->
