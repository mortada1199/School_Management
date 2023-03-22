<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddInvestigationRequest;
use App\Http\Requests\UpdateInvestigationRequest;
use App\Http\Services\InvestigationServices;
use App\Http\Services\PeopleServices;
use App\Models\Investigation;
use App\Models\InvestigationTest;
use Illuminate\Http\Request;
// use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class InvestigationsController extends Controller
{
    
    public function index()
    {
        return view('all-investigations');
    }

    public function create()
    {
        return view('add-investigation');
    }

   
    public function edit( )
    {
        return view('investigations');
    }

    

}
