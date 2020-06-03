<?php

namespace App\Http\Controllers;

use App\CoursePurchase;
use App\models\Course;
use App\models\CoursePurchase as ModelsCoursePurchase;
use App\models\StudentCourseEnrollment;
use App\models\User;
use Exception;
use Illuminate\Http\Request;
use Validator;

class CoursePurchaseController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware('auth:api', []);
        $this->user = auth()->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $transactions = ModelsCoursePurchase::all();
            if ($transactions->isEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => "no transactions found",
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "transactions found",
                'data'=>$transactions
            ], 200);
        } catch (Exception $ex){
            return response()->json([
                'success' => false,
                'message' => "failed ".$ex->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'trans_id' => 'required|string',
                'course_id'=>'exists:courses,id'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }
            $clean_phone = preg_replace("/^(0|\+254)/", '254', $request->phone_no);
            
            $student = $this->user;
            $course = Course::find($request->course_id);

            $transaction = new ModelsCoursePurchase();
            $transaction->trans_id = $request->trans_id;
            $transaction->phone_no = $request->phone_no;
            $transaction->course()->associate($course);
            $transaction->user()->associate($student);
                      
            if (!$transaction->save()) {
                return response()->json([
                    'success' => false,
                    'message' => "could not create transaction"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "transaction created successfully",
                'data' => $transaction
            ], 201);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => "failed ".$ex->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoursePurchase  $coursePurchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $trans = ModelsCoursePurchase::find($id);
            if (!$trans) {
                return response()->json([
                    'success' => false,
                    'message' => 'trans not found'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'message' => "trans found",
                'data' => $trans,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoursePurchase  $coursePurchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'action' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 401);
            }
            $purchase = ModelsCoursePurchase::find($id);
            $student = $purchase->user;
            $enrollment = new StudentCourseEnrollment();

            $course = $purchase->course;
            if ($request->action === "approve") {
                $purchase->status = "approved";
                error_log("course >>>".$course->course_name);
                $enrollment->user_id = $student->id;
                $enrollment->course_id = $course->id;

                // $student->enrollments()->associate($enrollment);
                // $course->enrollment()->save($enrollment);
                // error_log("")
                
                
                if (!$enrollment->save()) {
                    return response()->json([
                        'success' => false,
                        'message' => "could not create enrollment"
                    ], 400);
                }
                // if (!$course->save()) {
                //     return response()->json([
                //         'success' => false,
                //         'message' => "could not create enrollment"
                //     ], 400);
                // }
                
            } else {
                $purchase->status = "rejected";
            }
                      
            if (!$purchase->save()) {
                return response()->json([
                    'success' => false,
                    'message' => "could not update purchase"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "purchase updated successfully",
                'data' => $purchase
            ], 201);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => "failed ".$ex->getMessage(),
            ], 500);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoursePurchase  $coursePurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $trans = ModelsCoursePurchase::find($id);
            if (!$trans) {
                return response()->json([
                    'success' => false,
                    'message' => 'trans not found'
                ], 404);
            }
            if (!$trans->delete()) {
                return response()->json([
                    'success' => false,
                    'message' => '$trans could not be deleted'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "trans deleted",
                'data' => $trans,
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => 'error occured in fetching: ' . $ex->getMessage()
            ], 500);
        }
    }
}
