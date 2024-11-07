<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\courses;

class CategoriesController extends Controller
{
    // Method to view all categories
    public function getWriterName()
    {
        $categories = categories::all();
        return view('main.writer', ['categories' => $categories]);
    }

}