<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = array();
        $emails = array();
        $faker =Faker::create();
        $password = bcrypt('secret');
        foreach(range(1,1200) as $index){
            $name = $faker->name;
            $email = $faker->email;
            if(!in_array($email,$emails)){
                $emails[] = $email;
                $data[] = compact('name','email','password');
            }
        }
        
        foreach($data as $user){
            DB::table('users')->insert($user);
        }
    }
}
