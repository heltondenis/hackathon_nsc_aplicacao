<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i <20; $i++){
            DB::table('person')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com'
            ]);
        }

        for($i = 0; $i <20; $i++){
            DB::table('question')->insert([

                'message' => Str::random(100),
                'accuracy' => rand(0,100),
                'person_id' => $i+1
            ]);
        }
    }
}
