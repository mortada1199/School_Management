<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomogeneityRequest;
use App\Models\Derivative;
use App\Models\Donation;
use App\Models\Homogeneity;

class HomogeneityController extends Controller
{
    public function create($id)
    {
        return view('homogeneity');
    }


}
