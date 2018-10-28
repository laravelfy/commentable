@if ($parent->comments->count())
    <p class="text-muted">{{__('没有评论')}}</p>
@endif

@foreach ($parent->comments as $comment)
    @include('comment.item')
@endforeach