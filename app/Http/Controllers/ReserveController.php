<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Books;
use App\Http\Requests\ReserveBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReserveController extends Controller
{

    public function reserveBook(ReserveBookRequest $request)
    {
        try {
            $user = Auth::user();

            $book = Books::findOrFail($request->id);
            $libraryKey = $book->library->library_key;
          
            if ($user->library_key !== $libraryKey) {
              return response()->json(['error' => 'You can only reserve books from your library.'], 403);
            }

            if ($book->is_reserved) {
                return response()->json(['error' => 'The book is not available for reservation.'], 400);
            }

            $book->update([
                'is_reserved' => true,
                'reserved_by' => $user->id,
            ]);

            return response()->json(['message' => 'Book reserved successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
