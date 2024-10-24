<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::create([
            'name' => 'Donation 1',
            'description' => 'Description 1',
            'target_amount' => 10000,
            'user_id' => 1
        ]);
    }
}
