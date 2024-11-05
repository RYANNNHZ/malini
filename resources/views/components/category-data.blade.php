                    <h1>Categories data</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Categories data
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">category name</th>
                                            <th scope="col">created at</th>
                                            <th scope="col">image</th>
                                            <th scope="col">events</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td scope='col' style="height: 70px">{{ $category->category_name }}</td>
                                            <td scope='col' style="height: 70qpx">{{ $category->created_at->format('d F Y') }}</td>
                                            <td scope='col' style="height: 70qpx">
                                                <img style="width:100px" src="{{ $category->image_url }}" alt="">
                                            </td>
                                            <td>
                                                <a href="" class=" text-center btn btn-primary"><i
                                                    class="bi bi-search"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="">
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
