<?php
Route::group([
    'middleware' => 'web',
], function () {
    Route::post('comment/store', '\Laravelfy\Commentable\Http\Controllers\CommentController@store')->name('comment.store');
});
