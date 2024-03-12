<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Roelle Goze (library1)',
        'library_key' => 'LIB1',
        'email' => 'rgoze1@gmail.com',
        'password' => Hash::make('rgoze1'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

         User::create(['name' => 'Roelle Goze (library2)',
        'library_key' => 'LIB2',
        'email' => 'rgoze2@gmail.com',
        'password' => Hash::make('rgoze2'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
