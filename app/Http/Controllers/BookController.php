<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Books;

class BookController extends Controller
{    
    public function getAllBooks()
    {
        try
        {
            $books = Books::with('user')
            ->get();
            return BookResource::collection($books);
            // return response()->json(['data' => $books], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
