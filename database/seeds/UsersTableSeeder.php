<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    public function createUser() {
        $faker = Faker\Factory::create();

        User::create([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'title' => $faker->title,
            'email' => $faker->email,
            'active' => $faker->boolean
        ]);
    }

    public function run() {
        for($i = 0; $i < 10; $i++) {
            $this->createUser();
        }
    }

}
