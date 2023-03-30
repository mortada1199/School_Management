<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Student;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected function create(Request $data)
    {
        $data = $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:6'],
            'phone' => ['required', 'string', 'min:10', 'max:14', "unique:students"],
            'another_phone' => ['required', 'string', 'min:10', 'max:14', "unique:students"],
            "age" => ['required', 'string',],
            "user_id" => ['required',],
            "grade_id" => ['required'],
            'chapter_id' => ['required', 'exists:chapters,id'],

        ]);
        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'phone' => $data['phone'],
            'another_phone' => $data['another_phone'],
            'age' => $data['age'],
            'user_id' => $data['user_id'],
            'grade_id' => $data['grade_id'],
            'chapter_id' => $data['chapter_id']
        ]);
        $token = $student->createToken('auth_token')->plainTextToken;


        return response()->json(['success' => 'true', 'message' => "user created successfully", 'data' => $student, 'token' => $token], 200);
    }


    public function login(Request $request)
    {

        $student = Student::where('email', $request['email'])->first();

        if ($student != null) {
            if ($request['email'] == $student->email && $request['password'] == $student->password) {
                $token = $student->createToken('auth_token')->plainTextToken;

                return Response()->json([
                    'access_token' => $token,
                    'data' => $student
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
    }

    public function Comment(Request $data)
    {
        $data = $data->validate([
            'rate' => ['required', 'integer', 'max:255'],
            'question' => ['required', 'string', 'max:255'],
            'schoolId' => ['required', 'integer']
        ]);
        $comment = Comment::create([
            'rate' => $data['rate'],
            'question' => $data['question'],
            'student_id' => auth()->id(),
            'user_id' => $data['schoolId']
        ]);

        return response()->json(['success' => 'true', 'message' => "comment created successfully", 'data' => $comment], 200);
    }

    public function getComment(Request $request)
    {
        $data = $request->validate([
            'school_id' => ['required', 'integer']

        ]);
        $comment = Comment::where('student_id', auth()->id())->where('user_id', $data['school_id'])->get();
        if ($comment != null) {
            return response()->json(['success' => 'true', 'message' => "comments", 'data' => $comment], 200);
        } else {
            return response()->json(['success' => 'false', 'message' => "No Comment", 'data' => $comment], 305);
        }

    }

    public function Invoice(Request $request)
    {

    }

    public function updateProfile(Request $request)
    {
        $request = $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:students'],
            'password' => ['string', 'min:6', 'confirmed'],
            'phone' => ['string', 'min:10', 'max:14', "unique:students"],


        ]);
        $student = Student::where('id', auth()->id())->first();
        if ($student != null) {
            $student->update([
                'name' => $request['name'] ?? $student->name,
                'email' => $request['email'] ?? $student->email,
                'password' => $request['password'] ?? $student->password,
                'phone' => $request['phone'] ?? $student->phone,
            ]);
            return  response()->json(['success' => 'true', 'message' => "profile update successfuly", 'data' => $student], 200);
        }
        else{
            return  response()->json(['success' => 'false', 'message' => "No profile", 'data' => ""], 305);

        }
    }

    }




