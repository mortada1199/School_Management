<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddKidRequest;
use App\Http\Services\PeopleServices;
use App\Models\Kid;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all-kids');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('add-kids');
    }

    
}
