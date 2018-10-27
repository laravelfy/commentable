<form class="form-horizontal form-comment-create" method="POST" action="{{route('comment.store')}}">
    @csrf
    <input type="hidden" name="parent_type" value="{{get_class($parent)}}">
    <input type="hidden" name="parent_id" value="{{$parent->id}}">
    <div class="form-group">
        <label class="col-md-12">内容</label>
        <div class="col-md-12">
            <textarea class="form-control" rows="3" name="content" placeholder="{{_('说点什么吧')}}"></textarea>
        </div>
        <div class="attachment hide {{'file-' . crc32(get_class($parent)) . '-' . $parent->id}}">
            <div class="col-md-12">
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
                <span class="file-list">
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-2">
            <input data-class="{{'file-' . crc32(get_class($parent)) . '-' . $parent->id}}" type="file" class="form-control" multiple="true">
        </div>
    </div>
    <!-- todo hasAttachment -->
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>
