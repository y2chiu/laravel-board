<?php
 
use Illuminate\Database\Seeder;
 
class CommentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('comments')->delete();
 
        $faker = Faker\Factory::create();

        $comment_data = [];
        foreach (range(1,49,1) as $v) {
            $comment_data[] = 
                [
                /*
                    'post_id'    => $v,
                    'nickname'   => 'User '.$v, 
                    'email'      => sprintf('bbb%d@bbb%d.com', $v, $v),
                    'sex'        => 'other',
                    'title'      => 'Re: Post title '.$v,
                    'comment'    => 'This is comment '.$v,
                    'created_at' => new DateTime, 
                    'updated_at' => new DateTime,
                */
                    'post_id'    => $v,
                    'nickname'   => $faker->name,
                    'email'      => $faker->email,
                    'sex'        => 'other',
                    'comment'    => $faker->text,
                    'created_at' => $faker->dateTime, 
                    'updated_at' => $faker->dateTime,
                ];
        }

        DB::table('comments')->insert($comment_data);
    }
 
}