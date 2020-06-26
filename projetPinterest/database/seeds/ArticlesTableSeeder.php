<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use App\User;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');

        for($i=1; $i<=4; $i++){
            $flex = random_int(100, 999);
            $id = (Auth::id())+1;
            DB::table('articles')->insert([
                'title'=>$faker->sentence,
                'image'=>$faker->imageUrl($width = 640, $height = $flex),
                'author'=>$faker->name,
                'content'=> $faker->paragraph(5),
                'updated_at'=>\Carbon\Carbon::now(),
                'created_at'=>\Carbon\Carbon::now(),
                'user_id'=> $id,
            ]);
        }

    }
}
