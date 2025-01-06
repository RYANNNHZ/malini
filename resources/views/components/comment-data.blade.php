<h1>Comments data</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Comments data
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">author</th>
                        <th scope="col">comment</th>
                        <th scope="col">created at</th>
                        <th scope="col">events</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td scope='col' style="height: 70px">{{ $comment->user->username }}</td>
                        <td scope='col' style="height: 70px">{{ $comment->coment_text }}</td>
                        <td scope='col' style="height: 70px">{{ $comment->created_at->format('d F Y') }}</td>
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
            {{ $comments->links() }}
        </div>
    </div>
</div>
