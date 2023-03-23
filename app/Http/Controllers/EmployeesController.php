<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return view('employees');
    }


    /**
     * create new resource.
     *
     * @return mixed
     */
    public function create()
    {

        return view('add-employee');
    }



    public function edit()
    {
        return view('edit-employee');
    }


}
