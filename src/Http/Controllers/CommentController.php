<?php
namespace Laravelfy\Commentable\Http\Controllers;

use Laravelfy\Commentable\Models\Comment;
use App\Http\Requests\CommentStoreRequest;

class CommentController
{
    public function store(CommentStoreRequest $request)
    {
        $input = request()->all();

        $commment = new Comment($input);
        $commment->user()->associate($request->user());
        $commment->save();

        return response()->json(['success' => true, 'message' => 'OK', 'data' => $commment,]);
    }
}
