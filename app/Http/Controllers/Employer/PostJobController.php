<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    public function index()
    {
        return view('employer.post-job');
    }
}
