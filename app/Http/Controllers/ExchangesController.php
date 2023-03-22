<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExchangeRequest;
use App\Http\Services\ExchangeServices;
use App\Models\Derivative;
use App\Models\Exchange;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ExchangesController extends Controller
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
     * @return mixed
     */
    public function create($order)
    {
        return view('exchanges');
    }

}
