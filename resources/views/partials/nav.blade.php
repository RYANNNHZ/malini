<div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <h5 class="brand-name"><a class="text-decoration-none text-light" href="/product">Malini.</a> <i
                            class="bi bi-tree-fill"></i></h5>
                </div>
                <div class="col-md-5 my-auto">
                    <form role="search">
                        <div class="input-group">
                            <input type="search" placeholder="Search your product" class="form-control" />
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 my-auto">
                    <ul class="nav justify-content-end">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cart-fill"></i> Cart (0)
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                @if (Auth::check())
                                    {{ Auth::user()->username ?? 'username' }}
                                @else
                                    username
                                @endif


                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/users"><i class="fa fa-user"></i> Profile</a></li>

                                <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a>
                                </li>
                                                                <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My
                                                                        Cart</a></li>
                                @if (!Auth::check())
                                
                                @elseif (Auth::user()->role == 'admin')
                                <li><a class="dropdown-item" href="/admin"><i class="fa fa-person"></i>admin</a>
                                </li>
                                @else

                                @endif
                                @if (Auth::check())
                                    <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i>
                                            Logout</a>
                                    @else
                                    <li><a class="dropdown-item" href="/halamanlogin"><i class="fa fa-sign-out"></i>
                                            login</a>
                                    <li><a class="dropdown-item" href="/halamanregister"><i class="fa fa-sign-out"></i>
                                            register</a>
                                @endif
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                Malini <i class="bi bi-tree-fill"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $header == 'products' ? 'bg-dark text-light' : '' }}"
                            href="/product">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $header == 'categories' ? 'bg-dark text-light' : '' }}"
                            href="/category">All Categories</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
