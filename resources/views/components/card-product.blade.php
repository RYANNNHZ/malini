<div class="card text-start rounded-4 p-3">
    <img class="card-img-top d-md-none d-block" src="{{ $image }}" alt="Title" />
    <div class="card-body d-flex justify-content-between">                    {{-- <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Body</p>
        </div> --}}
        <div class="wrapper-title w-50">
            <h4 class="card-title fw-bold">{{ $title }}</h4>
            <p style="background-color: " class="text-secondary">{{ $description }}</p>
        </div>
        <div class="wrapper-rating w-50 d-inline-block">
            @php
                $ratings = $rating->pluck('rating_value')->toArray(); // Mengambil nilai rating dari collection
                $sum = array_sum($ratings);
                $count = count($ratings);
                $mean = $count > 0 ? $sum / $count : 0; // Pastikan tidak terjadi pembagian dengan nol
            @endphp

            <p style="background-color:#ffeecb; color:#EB9B00;"
                class="text-warning ms-auto px-2 w-50 w-md-100 text-center rounded-5">
                {{ round($mean, 1) }} {{-- Menampilkan hasil rata-rata dengan 1 angka di belakang koma --}}
                <i class="bi bi-star-fill"></i>
            </p>
        </div>
    </div>
    <div class="card-body d-block d-md-flex">
        <div class="wrapper-price w-50">
            <h3>{{ $price }}K</h3>
        </div>
        <div class="wrapper-addCart w-100 w-md-50 d-block d-md-flex">
            <a class="btn btn-dark w-100 my-1 my-md-0 rounded-5">checkout<i
                    class="mx-1 bi bi-basket-fill"></i></a>


                    <form action="/cart" method="post" class="btn btn-dark w-100 my-1 my-md-0 rounded-5 ms-md-1">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
            <button class="btn btn-dark w-100 my-1 my-md-0 rounded-5 ms-md-1" type="submit">add cart<i
                    class="mx-1 bi bi-cart-check-fill"></i></button>
                </form>

        </div>
    </div>
</div>
