<div class="col-12 col-md-6 col-lg-4 mb-4">
    <a href="/product/{{ $product->id }}" class="text-decoration-none">
        <div class="card text-dark card-has-bg click-col" style="background-image:url('{{ $product->image_url }}');">
            <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
            <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <h4 class="card-title mt-0"><span class="text-dark text-decoration-none">{{ $product->product_name }}</span></h4>
                    <small class="card-meta mb-2">{{ $product->description }}</small><br>
                    <small><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</small>
                </div>
                <div class="card-footer">
                    <div class="media">
                        <div class="media-body d-flex justify-content-between">
                            <div>
                                <h6 class="my-0 text-dark d-block">{{ $product->price }}K</h6>
                                @foreach ($product->categories as $category)
                                    <small>{{ $category->category_name }}</small>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
