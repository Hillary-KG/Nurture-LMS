<?php

namespace App\Http\Controllers;

use App\helpers\customPaginator;
use App\models\Course;
use Illuminate\Http\Request;

class WebUIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'registerAdmin', 'registerTutor', 'registerStudent']]);
        $this->user = auth()->user();
    }

    public function home(Request $request)
    {
        $courses = customPaginator::paginator(10, Course::orderBy('course_name', 'desc')->get())->toJson();
        return view('index', ['courses'=>json_decode($courses)]);
    }


    public function registerStudent(Request $request)
    {
        return view('auth/register_student', []);
    }

    public function registerTutor(Request $request)
    {
        return view('auth/register_tutor', []);
    }

    public function registerAdmin(Request $request)
    {
        return view('auth/register_admin', []);
    }

    public function login(Request $request)
    {
        return view('auth/login', []);
    }

    public function student_dash(Request $request)
    {
        $courses = collect([]);
        $enrollments = $this->user->enrollments();
        foreach ($enrollments as $enroll) {
            $courses->push($enroll);
        }
        return view('dashboard/student_dash', ['courses' => $courses, 'user'=>$this->user]);
    }
    public function admin_dash(Request $request)
    {
        return view('dashboard/admin_dash', []);
    }

    public function tutor_dash(Request $request)
    {
        return view('dashboard/tutor_dash', []);
    }
    
}
