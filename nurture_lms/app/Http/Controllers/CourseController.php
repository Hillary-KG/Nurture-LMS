<?php

namespace App\Http\Controllers;

use App\models\Course;
use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except'=>['search']]);
    }
    public function createCourse(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'course_name' => 'required|string',
                'description' => 'required|string',
                'cost' => 'required|numeric|between:0,999999.99',
                'duration' => 'required|numeric',
                'course_video' => 'required|mimes:mimes:webp,svg,mpeg,ogg,mp4,webm,flv,m3u8,ts,3gp,mov,avi,wmv,image/gif,qt|max:200000',
                'thumbnail' => 'required|mimes:jpeg,bmp,png,gif'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }

            $course = new Course();
            $user = auth()->user();

            $uniqueName = (int) microtime(); // For unique naming vaideo/poster
            $videoSrc = "";
            $thumbnailSrc = "";

            $file = $request->file('course_video');
            // Upload video
            $destinationPath = 'uploads/videos';
            $fileName = $uniqueName . '.' . $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $fileName);
            $videoSrc = '/' . $destinationPath . '/' . $fileName;
            $course->course_video = $videoSrc;

            $thumbnail = $request->file('thumbnail');
            // Upload poster
            $destinationPath = 'uploads/images';
            $fileName = "thumbnail" . $uniqueName . '.' . $thumbnail->getClientOriginalExtension();
            $uploadSuccess = $thumbnail->move($destinationPath, $fileName);
            $thumbnailSrc = '/' . $destinationPath . '/' . $fileName;

            $course->thumbnail = $thumbnailSrc;

            // $thumbnail = $request->file('thumbnail')->store('images');
            // // dd($thumbnail);

            // // $filename = $thumbnail->getClientOriginalName();
            // // $path = 'uploads/courses';
            // // $upload_path = Storage::putFileAs($path, $thumbnail, $filename);
            // $course->thumbnail = $thumbnail;

            // $course_vid = $request->file('course_video')->store('videos');
            // // dd($course_vid);
            // // $vid_name = $course_vid->getClientOriginalName();
            // // $vid_path = Storage::putFileAs($path, $course_vid, $vid_name);
            // $course->course_video = $course_vid;


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
                'message' => "failed " . $ex->getMessage(),
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
                'data' => $courses
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
    
    public function search(Request $request)
    {
        try {
            error_log("input ".$request->course);
            
            $courses = DB::table('courses')->where('course_name', 'like', '%'.$request->course.'%')->get();
            error_log("input ".$request->course);
                           
            if ($courses->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'courses not found'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "courses found",
                'data' => $courses,
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
