<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public  function index()
    {
        $schools=\App\Models\User::all();
        return response()->json(['success'=>true, 'schools'=>UserResource::collection($schools)],200);
    }
}
