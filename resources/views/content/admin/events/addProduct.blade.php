@extends('template')

@section('konten')
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex my-3">
                <x-navigation-header :product="null" navigate="admin"></x-navigation-header>
            </div>
            <div class="row">
                <div class="col-12 offset-0 col-md-6 offset-md-3">
                    <div class="card my-5">
                        <div class="card-body">
                            <form action="/product" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="product_name" class="form-label">product name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                        aria-describedby="helpId" placeholder="product..." />
                                    @error('product_name')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">description</label>
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                                    @error('description')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="image_url" class="form-label">Choose image</label>
                                    <input type="file" class="form-control" name="image_url" id="image_url"
                                        placeholder="image..." aria-describedby="fileHelpId" />
                                    @error('image_url')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        aria-describedby="helpId" placeholder="price..." />
                                    @error('price')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select form-select-sm" name="category_id" id="category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                                </div>


                                <button type="submit" class="btn btn-dark">add product <i
                                        class="bi bi-box-seam-fill"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
