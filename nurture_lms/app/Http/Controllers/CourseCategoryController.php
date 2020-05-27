<?php

namespace App\Http\Controllers;

use App\models\CourseCategory;
use Exception;
use Illuminate\Http\Request;
use Validator;


class CourseCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', []);
    }
    public function createCategory(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'category' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }

            $courseCat = new CourseCategory();
            $courseCat->categoty = $request->category;
            

            if (!$courseCat->save()) {
                return response()->json([
                    'success' => false,
                    'message' => "could not create courseCat"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "courseCat created successfully",
                'data' => $courseCat
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
            $categories = CourseCategory::all();
            if ($categories->isEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => "no categories found",
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "categories found",
                'data'=>$categories
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
            $courseCat = CourseCategory::find($id);
            if (!$courseCat) {
                return response()->json([
                    'success' => false,
                    'message' => 'courseCat not found'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "courseCat found",
                'data' => $courseCat,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $courseCat = CourseCategory::find($id);
            if (!$courseCat) {
                return response()->json([
                    'success' => false,
                    'message' => 'courseCat not found'
                ], 404);
            }
            if (!$courseCat->update($request->all())) {
                return response()->json([
                    'success' => false,
                    'message' => 'courseCat could not updated'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "courseCat updated",
                'data' => $courseCat,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in updating: ' . $ex->getMessage()
            ], 400);
        }
    }

    public function delete($id)
    {
        try {
            $courseCat = CourseCategory::find($id);
            if (!$courseCat) {
                return response()->json([
                    'success' => false,
                    'message' => 'courseCat not found'
                ], 404);
            }
            if (!$courseCat->delete()) {
                return response()->json([
                    'success' => false,
                    'message' => 'courseCat could not be deleted'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "courseCat deleted",
                'data' => $courseCat,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 400);
        }
    }
}
