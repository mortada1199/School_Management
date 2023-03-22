<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateViralDiseaseRequest;
use App\Models\ViralDisease;

class ViralDiseasesController extends Controller
{
   
    public function index()
    {
        return view('viral-diseases');
    }

   
  
}
