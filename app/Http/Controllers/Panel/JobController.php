<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends ClientController
{
    public function allJob() {

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $jobs = $user->jobs;



        return view('isverenpanel.all-jobs', [
            'jobs' => $jobs,
            'user' => $user

        ]);
    }


    public function activeJob() {

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $jobs = $user->active_jobs;





        return view('isverenpanel.active-jobs', [
            'jobs' => $jobs,
            'user' => $user

        ]);
    }

    public function pastJob() {

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $jobs = $user->past_jobs;



        return view('isverenpanel.past-jobs', [
            'jobs' => $jobs,
            'user' => $user

        ]);
    }




    public function getOneJob($slug) {

        session_start();
        $job = $this->obtainOneJob($slug)->data;
        $user =$this->obtainOneUser($_SESSION['me']->id)->data;

        return view('pages.job-detail', [
            'job' => $job,
            'user'=> $user

        ]);
    }
}
