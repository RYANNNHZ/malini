<div class="offset-0 offset-md-3 col-12 col-md-6">
    <div class="card text-start p-5 d-inline-block w-100">
        <img class="card-img-top w-50" src="https://avatar.iran.liara.run/username?username={{ Auth::user()->username }}" alt="Title" />
        <div class="card-body">
            <h4 class="card-title">{{ Auth::user()->username }}</h4>
            <p class="card-text">{{ Auth::user()->email }}</p>
        </div>
    </div>
</div>
