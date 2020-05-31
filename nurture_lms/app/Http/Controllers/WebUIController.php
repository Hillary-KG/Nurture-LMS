<?php

namespace App\Http\Controllers;

use App\helpers\customPaginator;
use App\models\Course;
use App\models\CourseCategory;
use App\models\CoursePurchase;
use App\models\User;
use Illuminate\Http\Request;

class WebUIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['tutors', 'contact', 'about', 'login', 'home', 'registerAdmin', 'registerTutor', 'registerStudent']]);
        $this->user = auth()->user();
    }

    public function home(Request $request)
    {
        $courses = Course::orderBy('course_name', 'asc')->get();
        return view('index')->with(['courses'=>$courses]);
    }
    public function courses(Request $request)
    {
        $courses = Course::orderBy('course_name', 'asc')->get();
        return view('dashboard/courses')->with(['courses'=>$courses]);
    }

    public function studentDash(Request $request)
    {
        $enrollments = $this->user->enrollments;
        
        return view('dashboard/student_dash')->with(['enrollments'=>$enrollments]);
    }

    public function tutorDash(Request $request)
    {
        $courses = $this->user->courses();
        $categories = CourseCategory::all();
        return view('dashboard/tutor_dash')->with(['courses'=> $courses, 'categories'=>$categories]);
    }

    public function adminDash(Request $request)
    {
        $courses = Course::orderBy('course_name', 'asc')->get();
        $purchases = CoursePurchase::all();
        $students = User::where('type', 2)->get();
        $tutors = User::where('type', 1)->get();
        $categories = CourseCategory::all();
        return view('dashboard/admin_dash')->with(['tutors'=>$tutors,'categories'=>$categories, 'courses'=>$courses, 'purchases'=>$purchases, 'students'=>$students]);
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
    

    public function course($id)
    {
        
        $course = Course::find($id);
        error_log("log lololo".$course->course_video);
        return view('dashboard/course')->with('course', $course->course_video);
    }
    public function about(Request $request)
    {
        return view('dashboard/about', []);
    }
    public function contact(Request $request)
    {
        return view('dashboard/contact', []);
    }
    public function tutors(Request $request)
    {
        $tutors = User::where('type', 1)->get();
        return view('dashboard/tutors')->with('tutors', $tutors);
    }
    
}
