<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends ClientController
{
    public function getOneProfile($slug) {
        @session_start();

        if (!isset($_SESSION["access_token"]) || !isset($_SESSION["me"]) || $slug =! $_SESSION['me']->slug)
            return redirect("/404");


        if ($_SESSION["me"]->type == "0") {


            $towns=$this->obtainTowns();
            $user = $this->obtainOneUser($_SESSION["me"]->slug)->data;

            return view('iscipanel.profile', [

                'user' => $user,
                'towns'=> $towns

            ]);

        }
         else if ($_SESSION["me"]->type == "1"){
             $towns=$this->obtainTowns();
             $user = $this->obtainOneEmployer($_SESSION["me"]->slug)->data;
             return view('isverenpanel.profile', [

                 'user' => $user,
                 'towns'=> $towns

             ]);
        }


    }
}
