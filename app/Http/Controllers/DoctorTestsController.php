<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorTestRequest;
use App\Http\Services\ProcessableServices;
use App\Http\Services\RejectionsServices;
use App\Models\Kid;
use App\Models\Polycythemia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf\Tag\Tr;

class DoctorTestsController extends Controller
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
    public function create()
    {
        return view('doctorTest');
    }

   
}
