<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        Book::firstOrCreate([
            'name' => 'Jungle Land',
            'code_book' => '123',
            'price' => 10
        ]);
    }
}
