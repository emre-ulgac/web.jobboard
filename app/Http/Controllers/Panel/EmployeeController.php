<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends ClientController
{
    public function employee(){

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;


        return view('isverenpanel.employee',[
            'user' => $user
        ]);
    }
}
