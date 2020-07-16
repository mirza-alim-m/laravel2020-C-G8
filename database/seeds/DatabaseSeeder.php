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
        // $this->call(UsersTableSeeder::class);
        $this->call(PsTableSeeder::class);

        $faker = Faker::create('id_ID');
 
        for($i = 1; $i <= 50; $i++){
 
              // insert data ke table pelanggan menggunakan Faker
            DB::table('pelanggan')->insert([
                'pelanggan_nama' => $faker->name,
                'pelanggan_alamat' => $faker->address,
                'pelanggan_telpon' => $faker->PhoneNumber,
            ]);
 
        }
    }
}
