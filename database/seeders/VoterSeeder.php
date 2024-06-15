<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voters')->insert([
            ['party_id' => 1, 'name' => 'Voter 1'],
            ['party_id' => 2, 'name' => 'Voter 2'],
            // Add more voters as needed
        ]);
    }
}
