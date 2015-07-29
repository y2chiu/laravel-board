<?php
 
use Illuminate\Database\Seeder;
 
class PostTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('posts')->delete();
 
        $faker = Faker\Factory::create();

        $post_data = [];
        foreach (range(1,55,1) as $v) {
            $post_data[] = 
                [
                /*
                    'nickname'   => 'User '.$v, 
                    'email'      => sprintf('aaa%d@aaa%d.com', $v, $v),
                    'post'       => 'This is post '.$v,
                    'sex'        => 'other',
                    'title'      => 'Post title '.$v,
                    'created_at' => new DateTime, 
                    'updated_at' => new DateTime,
                */
                    'nickname'   => $faker->name,
                    'email'      => $faker->email,
                    'sex'        => 'other',
                    'title'      => $faker->sentence,
                    'post'       => join("\n",$faker->paragraphs(3)),
                    'created_at' => $faker->dateTime, 
                    'updated_at' => $faker->dateTime,
                ];
        }

        DB::table('posts')->insert($post_data);
    }
 
}