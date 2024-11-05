<div data-mdb-input-init class="form-outline mb-4">
    <form action="/comment" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" value="{{ $productId }}" name="idproduct">
        <textarea name="coment" class="form-control" placeholder="type comment..." id="" cols="10"
        rows="3"></textarea>
        <button type="submit" class="btn btn-dark my-3">add comment</button>
    </form>
</div>
