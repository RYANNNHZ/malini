<div class="col-12 col-md-6 col-lg-6 mb-4 my-5">
    <!-- Bungkus seluruh kartu dengan <a> -->
    <a href="{{ url('category/' . $category->id) }}" class="text-decoration-none">
        <div class="card text-dark card-has-bg click-col"
            style="background-image:url('{{ $category->image_url }}');">

            <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">

            <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <h4 class="card-title mt-0">
                        {{ $category->category_name }}
                    </h4>
                    <small><i class="far fa-clock"></i></small>
                </div>
                <div class="card-footer">
                    <div class="media">
                        <div class="media-body d-flex justify-content-between">
                            <div class=""></div>
                            <div class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
