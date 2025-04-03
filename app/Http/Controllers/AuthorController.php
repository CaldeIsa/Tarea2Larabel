<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = [
            ['id' => 1, 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelí / Americano', 'birth_year' => 1952, 'fields' => 'Database Systems, Operating Systems', 'books' => ['Operating System Concepts', 'Database System Concepts']],
            ['id' => 2, 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Holandés / Americano', 'birth_year' => 1944, 'fields' => 'Distributed Computing, Operating Systems', 'books' => ['Computer Networks', 'Modern Operating Systems']],
        ];

        return view('authors.index', compact('authors'));
    }
}
