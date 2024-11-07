<?php

namespace App\Http\Controllers;
use App\Models\courses;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CoursesController extends Controller
{
    public function getAllCourses(Request $request)
    {
        $courses = courses::paginate(3);
        return view('main.popular', ['courses' => $courses]);
    }

    public function getHomeCourses(Request $request)
    {
        $courses = courses::take(2)->get();
        return view('main.home', ['courses' => $courses]);
    }

    public function getDatsciCourses(Request $request)
    {
        $courses = courses::where('categories_id', 1)->get();
        return view('categories.datsci', ['courses' => $courses]);
    }

    public function getNetSecureCourses(Request $request)
    {
        $courses = courses::where('categories_id', 2)->get();
        return view('categories.netsecure', ['courses' => $courses]);
    }

}

