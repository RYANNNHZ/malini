<h1>Products data</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Products data
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Product name</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">created at</th>
                        <th scope="col">image</th>
                        <th scope="col">events</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td scope='col' style="height: 70px">{{ $product->product_name }}</td>
                        <td scope='col' style="height: 70px">{{ $product->description }}</td>
                        <td scope='col' style="height: 70px">{{ $product->price }}k</td>
                        <td scope='col' style="height: 70qpx">{{ $product->created_at->format('d F Y') }}</td>
                        <td scope='col' style="height: 70qpx">
                            <img style="width:100px" src="{{ $product->image_url }}" alt="">
                        </td>
                        <td>
                            <a href="" class=" text-center btn btn-primary"><i
                                class="bi bi-pen"></i></a>
                            <a href="" class=" text-center btn btn-warning"><i
                                class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="">
            {{ $products->links() }}
        </div>

    </div>
</div>
