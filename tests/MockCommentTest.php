<?php
namespace Laravelfy\Commentable\Tests;

use PHPUnit\Framework\TestCase;
use Laravelfy\Commentable\Models\Comment;
use Faker\Factory as Faker;

class MockCommentTest extends TestCase
{
    /**
     * 测试New
     *
     * @return void
     */
    public function testMockComment()
    {
        $facker = Faker::create();

        $id = $facker->randomNumber();
        $comment = new Comment([
            'content' => $facker->sentence,
            'user_id' => $facker->randomNumber(),
            'parent_type' => self::class,
            'parent_id' => $id,
        ]);

        $this->assertEquals($comment->parent_id, $id);
    }
}
