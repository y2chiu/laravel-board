<?php
 
use Illuminate\Database\Seeder;
 
class PostTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('posts')->delete();
 
        $post_data = [];
        foreach (range(1,10,1) as $v) {
            $post_data[] = 
                [
                    'nickname'   => 'User '.$v, 
                    'email'      => sprintf('aaa%d@aaa%d.com', $v, $v),
                    'post'       => 'This is post '.$v,
                    'title'      => 'Post title '.$v,
                    'created_at' => new DateTime, 
                    'updated_at' => new DateTime,
                ];
        }

        DB::table('posts')->insert($post_data);
    }
 
}