<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 评论请求
 */
class CommentStoreRequest extends FormRequest
{
    /**
     * 当前用户是否有权限添加评论
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user() ? true: false;
    }

    /**
     * 校验规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'parent_id' => 'integer|required|min:1',
            'parent_type' => 'string|required',
            'content' => 'string|required',
        ];
    }
}
