<div class="panel panel-default panel-comment">
    <div class="panel-heading">
        @if ($parent->comments->count())
            {{$parent->comments->count()}}
        @endif
        评论
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            @include('comment.list')

            <h3>添加评论</h3>
            @include('comment.create')
        </div>
    </div>
</div>