<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //isprazni tabelu

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'email' => $faker->email,
                'country' => $faker->address,
                'company' => $faker->company,
                'password' => $faker->md5,
                
            ]);
        }
    }
}
