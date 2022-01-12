<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Status;
use Exception;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index',compact('statuses'));
    }
} 
