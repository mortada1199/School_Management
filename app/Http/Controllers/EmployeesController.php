<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Services\EmployeesServices;
use App\Models\Employee;
use App\Models\User;
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
