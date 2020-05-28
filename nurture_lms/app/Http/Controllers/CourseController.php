<?php

namespace App\Http\Controllers;

use App\models\Course;
use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Validator;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', []);
    }
    public function createCourse(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'course_name' => 'required|string',
                'description' => 'required|string',
                'cost' => 'required|numeric|between:0,999999.99',
                'duration' => 'required|numeric'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }

            $course = new Course();
            $user = auth()->user();
            $course->course_name = $request->course_name;
            $course->description = $request->description;
            $course->cost = $request->cost;
            $course->duration = $request->duration;
            $course->tutor()->associate(auth()->user());
            $course->category()->associate($request->category);

            if (!$course->save()) {
                return response()->json([
                    'success' => false,
                    'message' => "could not create course"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "course created successfully",
                'data' => $course
            ], 201);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => "failed ".$ex->getMessage(),
            ], 500);
        }
    }

    public function getAll()
    {
        try {
            $courses = Course::all();
            if ($courses->isEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => "no courses found",
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "courses found",
                'data'=>$courses
            ], 200);
        } catch (Exception $ex){
            return response()->json([
                'success' => false,
                'message' => "failed ".$ex->getMessage(),
            ], 500);
        }
    }

    public function getOne($id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => 'course not found'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "course found",
                'data' => $course,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => 'course not found'
                ], 404);
            }
            $course->description = $request->description;

            // error_log("requests", );
            if (!$course->save()) {
                return response()->json([
                    'success' => false,
                    'message' => 'course could not updated'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "course updated",
                'data' => $course,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in updating: ' . $ex->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        try {
            $course = Course::find($id);
            if (!$course) {
                return response()->json([
                    'success' => false,
                    'message' => 'course not found'
                ], 404);
            }
            if (!$course->delete()) {
                return response()->json([
                    'success' => false,
                    'message' => 'course could not be deleted'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "course deleted",
                'data' => $course,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 500);
        }
    }
}
