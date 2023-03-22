<?php

namespace App\Http\Controllers;

use App\Http\Requests\DerivativesRequest;
use App\Models\Derivative;
use App\Models\Donation;

class DerivativesController extends Controller
{


    public function create($id)
    {


        return view('blood-derivatives');
    }

}
