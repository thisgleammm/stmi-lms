<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $requet)
    {
        $courses = courseModel::all();

        $course = $courses->toArray();

        return view('dashboard', ['courses' => $course]);
    }
}
