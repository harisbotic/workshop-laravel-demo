<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print("CATEGORY\n");
        factory(Category::class, 10)->create();
        print("TAG\n");
        factory(Tag::class, 10)->create();
        print("USER\n");
        factory(User::class, 9)->create();
        print("POST\n");
        factory(Post::class, 25)->create();
        print("COMMENT\n");
        factory(Comment::class, 40)->create();

        print("POST TAG\n");
        $data = [];
        for ($i = 0; $i < 60; $i++) {
            $data[] = [
                'post_id'    => rand(1, 25),
                'tag_id'     => rand(1, 10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
        }

        DB::table('post_tag')->insert($data);
    }
}
