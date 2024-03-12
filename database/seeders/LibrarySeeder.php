<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Library;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Library::create(['name' => 'First Library', 'library_key' => 'LIB1']);
        Library::create(['name' => 'Second Library', 'library_key' => 'LIB2']);
    }
}
