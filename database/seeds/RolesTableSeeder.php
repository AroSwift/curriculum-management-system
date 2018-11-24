<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder {

    public function run() {
        $faker = Faker\Factory::create();

        Role::create([
            'name' => 'Admin',
            'description' => 'A permission that grants all CRUD abilities'
        ]);

        Role::create([
            'name' => 'User',
            'description' => 'A permission that grants basic abilities'
        ]);
    }

}
