<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends ClientController
{

    public function getOneEmployer($slug) {

        $employer = $this->obtainOneEmployer($slug)->data;


        return view('pages.employer', [
            'employer' => $employer,
            'active_jobs' => $employer->active_jobs

        ]);
    }
}
