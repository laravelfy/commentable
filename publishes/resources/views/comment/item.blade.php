<div class="media comment" id="comment-{{$comment->id}}">
    @if (data_get($comment, 'user.avatar'))
    <div class="media-left">
        <img class="media-object img-circle" data-src="{{$comment->user->avatar}}" alt="64x64" src="{{$comment->user->avatar}}" data-holder-rendered="true" style="width: 64px; height: 64px;">
    </div>
    @endif
    <div class="media-body">
        <h4 class="media-heading">{{$comment->user->name}} <small class="text-muted">发布于 {{$comment->created_at}}</small></h4>
        <div class="comment-content">{{$comment->content}}</div>
        <p>
            <a href="#" class="comment-reply-link comment-{{$comment->id}}" data-comment-id="{{$comment->id}}">回复</a>
        </p>
        <div class="comment-reply comment-{{$comment->id}} hide">
            @include('comment.create', ['parent' => $comment])
        </div>
        @if ($comment->comments->count())
            @include('comment.list', ['parent' => $comment,])
        @endif
    </div>
</div>
