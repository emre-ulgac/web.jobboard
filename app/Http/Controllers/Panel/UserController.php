<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends ClientController
{

    public function getOneUser($slug) {
        @session_start();

        $user = $this->obtainOneUser($slug)->data;
        $user2= $this->obtainOneEmployer($_SESSION['me']->slug)->data;

        return view('pages.candidate', [
            'candidate' => $user,
            'user'      => $user2

        ]);
    }
}
