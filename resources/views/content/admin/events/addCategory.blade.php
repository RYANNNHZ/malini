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
                            <form action="/category" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">category name</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name"
                                        aria-describedby="helpId" placeholder="category..." />
                                    @error('category_name')
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


                                <button type="submit" class="btn btn-dark">add category <i
                                        class="bi bi-box-seam-fill"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
