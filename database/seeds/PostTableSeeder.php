<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            $new_post = new Post();
            $new_post->title = "titolo post numero" . ($i+1);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content =($i+1). 'lorem';
            $new_post->save();
        }
    }
}
