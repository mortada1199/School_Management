<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateDonationRequest;
use App\Http\Services\PeopleServices;
use App\Models\Donation;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationsController extends Controller
{
    public function index()
    {
    
        return view('donors');
    }

    public function create()
    {

        return view('add-donation');
    }

   
    
}
