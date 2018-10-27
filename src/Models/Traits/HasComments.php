<?php

namespace Laravelfy\Commentable\Models\Traits;

use Laravelfy\Commentable\Models\Comment;


/**
 * 一个模型有评论
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 */
trait HasComments
{
    /**
     * 附件
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'parent');
    }
}
