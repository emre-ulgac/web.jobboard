<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends ClientController
{


    public  function getJobApplicants($slug){
        @session_start();

        $job=$this->obtainOneJob($slug)->data;
        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;


        return view('isverenpanel.applicants', [

            'users'  => $job->users,
            'job'    =>  $job,
            'user'   => $user

        ]);
    }

    public  function getJobRate($slug){
        @session_start();

        $job=$this->obtainOneJob($slug)->data;
        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;


        return view('isverenpanel.user_rates', [

            'users'  => $job->users,
            'job'    =>  $job,
            'user'   => $user

        ]);
    }
}
