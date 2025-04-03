<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' => '2012', 'language' => 'ENGLISH', 'pages' => 976, 'author' => 'Abraham Silberschatz', 'publisher' => 'John Wiley & Sons'],
            ['id' => 2, 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => 1376, 'author' => 'Abraham Silberschatz', 'publisher' => 'John Wiley & Sons'],
            ['id' => 3, 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => 960, 'author' => 'Andrew S. Tanenbaum', 'publisher' => 'Pearson Education'],
            ['id' => 4, 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' => '2014', 'language' => 'ENGLISH', 'pages' => 1136, 'author' => 'Andrew S. Tanenbaum', 'publisher' => 'Pearson Education'],
        ];

        return view('books.index', compact('books'));
    }
}
