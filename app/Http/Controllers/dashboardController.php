<?php

namespace App\Http\Controllers;

use App\Models\courseModel;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(Request $requet)
    {
        // Ambil user ID yang sedang login
        $userid = Auth::user()->id;

        $query = courseModel::all();
        // $query = Enrollment::join('courses', 'enrollment.course_id', '=', 'courses.id_course')
        //     ->join('biodata', 'biodata.id_biodata', '=', 'enrollment.student_id')
        //     ->where('biodata.user_id', '=', $userid)
        //     ->select('courses.name_courses', 'courses.code_course', 'courses.image')
        //     ->get();

        // Convert query result ke array
        $userWithCourses = $query->toArray();

        return view('dashboard', ['courses' => $userWithCourses]);
    }
}
