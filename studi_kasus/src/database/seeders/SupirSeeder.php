<?php

namespace Database\Seeders;

use App\Models\Supir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supir::firstOrCreate([
            'name' => 'Budi Santoso',
            'license_number' => 'SIM123456',
            'phone_number' => '08123456789',
            'address' => 'Jl. Mawar No. 10'
        ]);
        
    }
}
