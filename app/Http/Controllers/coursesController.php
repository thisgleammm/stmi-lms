<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseModel;

class coursesController extends Controller
{
    public function index(Request $request)
    {
        $courses = courseModel::all();

        $course = $courses->toArray();

        return view("mycourse", ['courses' => $course]);
    }

    public function courses(?string $course = "", ?string $type = "attendance")
    {
        $query = courseModel::all()->where('name_courses', '=', $course);
        $selectedCourse = $query->toArray();

        foreach ($selectedCourse as $item) {
            $selectedCourse = $item;
        }

        return view('coursefile', ['course' => $course, 'type' => $type, 'selectedCourse' => $selectedCourse]);
    }
}
