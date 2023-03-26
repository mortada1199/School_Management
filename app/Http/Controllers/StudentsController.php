<?php

namespace App\Http\Controllers;

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
        $data=$data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone'=>['required', 'string','min:10','max:14',"unique:students"],
            'another_phone'=>['required', 'string','min:10','max:14',"unique:students"],
            "age"=>['required', 'string',],
            "user_id"=>['required',],
            "grade_id"=>['required'],

        ]);
        $student= Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'phone'=>$data['phone'],
            'another_phone'=>$data['another_phone'],
            'age'=>$data['age'],
            'user_id'=>$data['user_id'],
            'grade_id'=>$data['grade_id'],
        ]);
        $token = $student->createToken('auth_token')->plainTextToken;


        return  response()->json(['success'=>'true','message'=>"user created successfully",'data'=>$student,'token'=>$token],200);
    }



public function login(Request $request)
{

    $student = Student::where('email', $request['email'])->first();
    
if($student != null){
    if ($request['email']==$student->email && $request['password']==$student->password) {
        $token = $student->createToken('auth_token')->plainTextToken;

        return Response()->json([
            'access_token' => $token
        ]);
       
    }
}
else{
    return response()->json([
        'message' => 'Invalid login details'
    ], 401);
}
    
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
