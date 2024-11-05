<div class="card mb-4 rounded-4">
    <div class="card-body rounded-4" style="background-color: #f0f2f5;">
        <p>{{ $comment->coment_text }}</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <img src="https://avatar.iran.liara.run/username?username={{ $comment->user->username }}" alt="avatar"
                    width="25" height="25" />
                <p class="small mb-0 ms-2">{{ $comment->user->username }}</p>
            </div>
            <div class="d-flex flex-row align-items-center">
                <i class="far fa-thumbs-up mx-2 fa-xs text-body"
                    style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0">
                    {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                </p>
            </div>
        </div>
    </div>
</div>
