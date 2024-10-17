@extends('template')

@section('konten')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login <i class="bi bi-tree-fill"></i> </p>

                    <form action="/login" method="POST" class="mx-1 mx-md-4">
                        @csrf
                        @method('POST')
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                @error('username')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                                <input type="text" id="form3Example1c" name="username" class="form-control" />
                                <label class="form-label" for="form3Example1c">Username/Email</label>
                            </div>
                        </div>


                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                @error('password')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                                <input type="password" id="form3Example4c" name="password" class="form-control" />
                                <label class="form-label" for="form3Example4c">Password</label>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <p class="text-dark me-4"> dont have an account <a class="text-decoration-none"
                                    href="/halamanregister">register</a> </p>
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-dark btn-lg">Login</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
