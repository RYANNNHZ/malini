@extends('template')

@section('konten')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach (Auth::user()->products as $product)
                    <div class="col-12 my-2">
                        <div class="card shadow-sm border-dark">
                            <div class="d-flex">
                                <!-- Gambar produk -->
                                <img src="{{ $product->image_url }}" class="img-fluid w-25" alt="Product Image">
                                <!-- Isi card -->
                                <div class="card-body d-flex flex-column justify-content-between w-75">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text text-muted">Description: {{ $product->description ?? 'No description available.' }}</p>
                                    <p class="card-text">Price: <strong>${{ number_format($product->price, 2) }}</strong></p>
                                    <p class="card-text">
                                        @if ($product->pivot->is_checkout)
                                            <span class="badge bg-success">Checked Out</span>
                                        @else
                                            <span class="badge bg-warning">Not Checked Out</span>
                                        @endif
                                    </p>
                                    <!-- Tombol disabled -->
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group w-auto">
                                            <input type="number" class="form-control" value="1" min="1" disabled>
                                            <button class="btn btn-primary" disabled>Update Quantity</button>
                                        </div>
                                        <button class="btn btn-danger" disabled>Add to Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 my-3">
                    <button class="btn btn-success w-100" disabled>Checkout All Items</button>
                </div>
            </div>
        </div>
    </div>
@endsection
