<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseModel;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;

class coursesController extends Controller
{
    public function index(Request $request)
    {
        // Ambil user ID yang sedang login
        $userid = Auth::user()->id;

        $query = Enrollment::join('courses', 'enrollment.course_id', '=', 'courses.id_course')
            ->join('biodata', 'biodata.id_biodata', '=', 'enrollment.student_id')
            ->where('biodata.user_id', '=', $userid)
            ->select('courses.name_courses', 'courses.code_course', 'courses.image')
            ->get();

        // Convert query result ke array
        $userWithCourses = $query->toArray();

        // Kirim data ke view
        return view("mycourse", ['courses' => $userWithCourses]);
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
