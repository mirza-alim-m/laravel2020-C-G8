<?php

use Illuminate\Database\Seeder;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

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
