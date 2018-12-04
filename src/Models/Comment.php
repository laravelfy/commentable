<?php

namespace Laravelfy\Commentable\Models;

use Laravelfy\Commentable\Models\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;

/**
 * 评论
 *
 * @property int $id
 * @property string $parent_type 父类
 * @property int $parent_id 父类id
 * @property int $user_id 用户id
 * @property string $content 内容
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereRefrenceCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laravelfy\Commentable\Models\Comment whereUserId($value)
 * @mixin \Eloquent
 */
class Comment extends Model
{
    use HasComments;

    protected $fillable = [
        'parent_type',
        'parent_id',
        'user_id',
        'content',
    ];

    /**
     * 父类
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function parent()
    {
        return $this->morphTo('parent');
    }

    /**
     * 用户
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        if (config('auth.providers.users.driver') !== 'eloquent') {
            $user_class = \App\User::class;
        } else {
            $user_class = config('auth.providers.users.model');
        }
        return $this->belongsTo($user_class);
    }
}
