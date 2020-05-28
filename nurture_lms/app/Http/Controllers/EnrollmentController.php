<?php

namespace App\Http\Controllers;

use App\models\StudentCourseEnrollment;
use Exception;
use Illuminate\Http\Request;
use Validator;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', []);
    }
    public function addEnrollment(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                // 'student' => 'exists:users,id',
                'course' => 'exists:courses,id'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }

            $enrollment = new StudentCourseEnrollment();
            $enrollment->student()->associate(auth()->user());


            if (!$enrollment->save()) {
                return response()->json([
                    'success' => false,
                    'message' => "could not create enrollment"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "enrollment created successfully",
                'data' => $enrollment
            ], 201);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => "failed " . $ex->getMessage(),
            ], 500);
        }
    }

    public function getAll()
    {
        try {
            $user = auth()->user();
            $enrollments = $user->enrollments();
            if ($enrollments->isEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => "no enrollments found",
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "enrollments found",
                'data' => $enrollments
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => "failed " . $ex->getMessage(),
            ], 500);
        }
    }

    public function getOne($id)
    {
        try {
            $enrollments = StudentCourseEnrollment::find($id);
            if (!$enrollments) {
                return response()->json([
                    'success' => false,
                    'message' => 'enrollments not found'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "enrollment found",
                'data' => $enrollments,
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
            $enrollment = StudentCourseEnrollment::find($id);
            if (!$enrollment) {
                return response()->json([
                    'success' => false,
                    'message' => 'enrollment not found'
                ], 404);
            }
            if (!$enrollment->update($request->all())) {
                return response()->json([
                    'success' => false,
                    'message' => 'enrollment could not updated'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "enrollment updated",
                'data' => $enrollment,
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
            $enrollment = StudentCourseEnrollment::find($id);
            if (!$enrollment) {
                return response()->json([
                    'success' => false,
                    'message' => 'enrollment not found'
                ], 404);
            }
            if (!$enrollment->delete()) {
                return response()->json([
                    'success' => false,
                    'message' => 'enrollment could not be deleted'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "enrollment deleted",
                'data' => $enrollment,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 500);
        }
    }
}
