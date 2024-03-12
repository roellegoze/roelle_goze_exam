<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;
use App\Models\Library;


class BookSeeder extends Seeder
{
    public function run()
    {
        $firstLibrary = Library::where('library_key', 'LIB1')->first();
        $secondLibrary = Library::where('library_key', 'LIB2')->first();

        // Books for the first library
        Books::create(['name' => 'Harry Potter',
        'library_id' => $firstLibrary->id,
        'is_reserved' => false,
        'reserved_by' => null,
        ]);

        Books::create(['name' => 'Marvel Comics', 
        'library_id' => $firstLibrary->id, 
        'is_reserved' => false,
        'reserved_by' => null,
        ]);

        // Books for the second library
        Books::create(['name' => 'Justice League',
        'library_id' => $secondLibrary->id,
        'is_reserved' => false,
        'reserved_by' => null,
        ]);

        Books::create(['name' => 'Game of Thrones',
        'library_id' => $secondLibrary->id,
        'is_reserved' => false,
        'reserved_by' => null,
        ]);

    }
  
}



