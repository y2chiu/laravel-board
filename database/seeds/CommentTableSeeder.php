<?php
 
use Illuminate\Database\Seeder;
 
class CommentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('comments')->delete();
 
        $comment_data = [];
        foreach (range(1,10,1) as $v) {
            $comment_data[] = 
                [
                    'post_id'    => $v,
                    'nickname'   => 'User '.$v, 
                    'email'      => sprintf('bbb%d@bbb%d.com', $v, $v),
                    'comment'    => 'This is comment '.$v,
                    'created_at' => new DateTime, 
                    'updated_at' => new DateTime,
                ];
        }

        DB::table('comments')->insert($comment_data);
    }
 
}