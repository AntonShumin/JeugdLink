<div class="card">
    <div class="card-header">
        <a href="/profile/{{$reply->owner->id}}">
            {{ $reply->owner->full_name() }}
        </a>
        zegt {{$reply->updated_at->diffForHumans() }}

    </div>
    <div class="card-body">
        <article>
            <div class="body">{{$reply->body}}</div>
        </article>
    </div>
</div>