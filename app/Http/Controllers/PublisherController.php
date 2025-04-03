<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = [
            ['id' => 1, 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => 1807, 'genre' => 'Academic', 'books' => ['Operating System Concepts', 'Database System Concepts']],
            ['id' => 2, 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => 1844, 'genre' => 'Education', 'books' => ['Computer Networks', 'Modern Operating Systems']],
        ];

        return view('publishers.index', compact('publishers'));
    }
}
