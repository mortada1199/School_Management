<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Kid;
use App\Models\Order;
use App\Models\Polycythemia;
use App\Models\Student;
use App\Models\ViralDisease;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $ordersCount=Student::where('user_id',auth()->id())->count();

        return view('index',compact('ordersCount'));
    }

    public function getData()
    {


        return view('viralTest');
    }
}
