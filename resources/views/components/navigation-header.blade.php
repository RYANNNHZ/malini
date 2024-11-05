
    <div class="col-4 text-start wrapper-backhome">
        <a style="" class="btn btn-light text-dark rounded-5" href="/{{ $navigate }}"><i class="bi bi-arrow-left"></i></a>
    </div>
    <div class="col-4 text-center wrapper-title">
        <h5 class="">malini.<i class="bi bi-tree-fill"></i></h5>
    </div>
    <div class="col-4 text-end wrapper-bookmark">
        @if ($product)
        @foreach ($product->categories as $category)
        <a class="btn btn-light text-dark rounded-5 fw-bold"
        href="/category/{{ $category->id }}">{{ $category->category_name }}</a>
        @endforeach

        @else

        @endif

    </div>
