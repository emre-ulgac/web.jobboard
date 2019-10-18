<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class ProfileController extends ClientController
{
    public function getProfile(){
        $towns=$this->obtainTowns();

        return view('isverenpanel.profile', [

            'towns' => $towns,

        ]);
    }
    public  function updateProfile(Request $request,$id){


        $result=$this->updateEmployer($request->all(),$id);

        Alert::success('Başarılı', 'Güncelleme gerçekleşti.');
        return redirect()->back();
    }
}
