<?php

namespace App\Http\Controllers;


use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class HomeController extends ClientController
{
    public function getAllHome() {

        session_start();

       $jobs = $this->obtainCurrentJobs()->data;

        return view('pages.home', [
            'jobs' => $jobs,

        ]);
    }

    public  function deneme(){
        Alert::success('Success Title', 'Success Message');
        return view("pages.deneme");
    }
}
