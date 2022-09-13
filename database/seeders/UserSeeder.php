<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for ($x = 0; $x < 10; $x++) {

            // insert data dummy pegawai dengan faker
            User::create(
                [
                    'name'      => $faker->name,
                    'email'     => $faker->email,
                    'password'  => bcrypt($faker->password)

                ]
            );
        }
    }
}
