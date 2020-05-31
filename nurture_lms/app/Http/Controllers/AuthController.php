<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\models\User;
use Validator;

class AuthController extends Controller
{
    protected $loginAfterSignUp = true;
    // use 
    //Create a new AuthController instance.
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'registerAdmin', 'registerTutor', 'registerStudent']]);
    }
    //register user
    public function registerStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|min:10|max:255|unique:users',
            'phone_no' => 'required|string|min:10|max:13|unique:users',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ], 400);
        }
        if ($request->password != $request->confirm_password) {
            return response()->json([
                'success' => false,
                'message' => "password mismatch",
            ], 400);
        }

        $user = new User();
        $user->email = $request->email;
        $clean_phone = preg_replace("/^(0|\+254)/", '254', $request->phone_no);
        $user->phone_no = $clean_phone;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = bcrypt($request->password);
        $user->type = 2;
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => "ok"
        ], Response::HTTP_OK);
    }
    public function registerTutor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|min:10|max:255|unique:users',
            'phone_no' => 'required|string|min:10|max:13|unique:users',
            'password' => 'required',
            'gender' => 'required',
            'thumbnail' => 'mimes:jpeg,bmp,png,gif',
            'confirm_password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ], 400);
        }
        if ($request->password != $request->confirm_password) {
            return response()->json([
                'success' => false,
                'message' => "password mismatch",
            ], 400);
        }
        $uniqueName = (int) microtime(); // For unique naming vaideo/poster
        $thumbnailSrc = "";
        
        $user = new User();
        $user->email = $request->email;
        $thumbnail = $request->file('thumbnail');
        // Upload poster
        $destinationPath = 'uploads/images';
        $fileName = "thumbnail" . $uniqueName . '.' . $thumbnail->getClientOriginalExtension();
        $uploadSuccess = $thumbnail->move($destinationPath, $fileName);
        $thumbnailSrc = '/' . $destinationPath . '/' . $fileName;

        $user->thumbnail = $thumbnailSrc;
        $clean_phone = preg_replace("/^(0|\+254)/", '254', $request->phone_no);
        $user->phone_no = $clean_phone;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);
        $user->type = 1;
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => "ok"
        ], Response::HTTP_OK);
    }
    public function registerAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|min:10|max:255|unique:users',
            'phone_no' => 'required|string|min:10|max:13|unique:users',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ], 400);
        }
        if ($request->password != $request->confirm_password) {
            return response()->json([
                'success' => false,
                'message' => "password mismatch",
            ], 400);
        }

        $user = new User();
        $user->email = $request->email;
        $clean_phone = preg_replace("/^(0|\+254)/", '254', $request->phone_no);
        $user->phone_no = $clean_phone;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = bcrypt($request->password);
        $user->type = 0;
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => "ok"
        ], Response::HTTP_OK);
    }

    // Get a JWT via given credentials.
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    //Get the authenticated User.

    public function user()
    {
        return response()->json(auth()->user());
    }

    //Log out user (Invalidate the token).
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    // Refresh a token.

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    //Get the token array structure.
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user_type' => auth()->user()->type,
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    //password reset
    public function resetPassword()
    {
    }
}
