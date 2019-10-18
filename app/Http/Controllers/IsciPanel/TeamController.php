<?php

namespace App\Http\Controllers\IsciPanel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends ClientController
{
    public function teams(){

        @session_start();

        $user=$this->obtainOneUser($_SESSION['me']->slug)->data;


        return view('iscipanel.teams',[
            'user' => $user
        ]);
    }
}
