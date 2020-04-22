<?php

use Illuminate\Database\Seeder;

class PsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ps')->insert([
            'ps_perhari' => 'Joni',
            'ps_overtime' => 'Jl. Panglateh'
        ]);
    }
}

