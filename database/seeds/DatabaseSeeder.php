<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
         $this->call([
             UsersTableSeeder::class,
             RolesTableSeeder::class,
             MajorsTableSeeder::class,
             CoursesTableSeeder::class
         ]);
    }

}
