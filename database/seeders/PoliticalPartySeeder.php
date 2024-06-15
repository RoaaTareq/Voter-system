<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class PoliticalPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('political_parties')->insert([
            ['name' => 'Party A'],
            ['name' => 'Party B'],
            // Add more parties as needed
        ]);
    }
}
