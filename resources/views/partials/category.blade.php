<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="#">{{$category->category_name}}</a>
        </li>
        @endforeach

    </ul>
</div>
