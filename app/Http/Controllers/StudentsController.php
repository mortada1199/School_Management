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
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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

    }

    public function uploadNotice(Request $request)
    {
        $request->validate(['attachementFile' => 'required', 'student_id' => 'required|exists:students,id']);

        $student = Student::find($request->student_id);

        if (isset($request['attachementFile'])) {
            $student->addMedia($request['attachementFile'])
                ->toMediaCollection('notices');
        }

        return response()->json(['success' => 'true', 'message' => "notices uploaded successfully"], 200);

    }

    public function uploadClasses(Request $request)

    {
        $request->validate(['classes' => 'required']);

        $chapter = Chapter::find($request->chapter_id);


        $request->whenHas('classes', function ($input) use ($chapter) {
            $chapter->uploadFiles($input, 'classes');
        });

        return back()->with('success', 'تم رفع الحصص بنجاح');

    }

    public function uploadGrades(Request $request)
    {
        $request->validate(['grades' => 'required']);

        $chapter = Chapter::find($request->chapter_id);


        $request->whenHas('grades', function ($input) use ($chapter) {
            $chapter->uploadFiles($input, 'grades');
        });

        return back()->with('success', 'تم رفع النتيجه بنجاح');

    }
}
