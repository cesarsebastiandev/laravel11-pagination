<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(Request $request)
    {
        $limit = (int) $request->query('limit', 20);

        $books = Book::paginate($limit);

        return response()->json($books, 200);
    }
}
