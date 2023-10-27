<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPetugasController extends Controller
{
    public function index()
    {
        $books = books::join('categories', 'books.categoryid', '=', 'categories.categoryid')
            ->select('books.*', 'categories.name AS category_name')
            ->orderby('books.isbn')
            ->get();
        
        return response()->view("books.index", ["books" => $books]);
    }
}
