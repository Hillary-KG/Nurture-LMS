<?php

namespace App\Http\Controllers;

use App\models\Course;
use App\models\Reviews as ModelsReviews;
use App\models\User;
use App\Reviews;
use Illuminate\Http\Request;
use Validator;
use Exception;

class ReviewsController extends Controller
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
    public function store(Request $request, $reviewable_id)
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

            $reviewable = User::find($reviewable_id) ?? Course::find($reviewable_id);

            $review = new ModelsReviews();
            $review->comment = $request->comment;
            $review->rating = $request->rating;
            $review->reviewer_id = $this->user->id;

            

            if (!$reviewable->reviews()->save($review)) {
                return response()->json([
                    'success' => false,
                    'message' => "could not add review"
                ], 400);
            }
            return response()->json([
                'success' => true,
                'message' => "review added successfully",
                'data' => $review
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
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    // public function edit(Reviews $reviews)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Reviews $reviews)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Reviews $reviews)
    // {
    //     //
    // }
}
