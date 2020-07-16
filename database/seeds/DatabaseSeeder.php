<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Faker\Factory as Faker;
=======
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b

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
<<<<<<< HEAD
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

=======
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b
    }
}
