<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends ClientController
{
    public function notification(){

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;


        return view('isverenpanel.notification',[
            'user' => $user
        ]);
    }
}
