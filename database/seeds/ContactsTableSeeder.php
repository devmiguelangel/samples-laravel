<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 15; $i++) {
            DB::table('contacts')->insert([
                'full_name'     => $faker->name,
                'phone_number'  => $faker->phoneNumber,
                'email'         => $faker->unique()->email
            ]);
        }
    }
}
