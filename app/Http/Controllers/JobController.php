<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function getJob(){
        $jobs = Job::all();
        return view('job/index', ['jobs' => $jobs, 'name' => "Omar Nafea"]);
        // there another practice to pass view data to view function if the file is in subfolder which is: job.index instead of job/index
    }
}
