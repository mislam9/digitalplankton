<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            App\User::create([
                'name' => $faker->name,
                'password' => bcrypt('123456'),
                'email' => $faker->email
            ]);
        }
    }
}
