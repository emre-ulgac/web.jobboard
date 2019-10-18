<?php

namespace App\Http\Controllers\IsciPanel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class ProfileController extends ClientController
{

    public function getProfile(){
        $towns=$this->obtainTowns();

        return view('iscipanel.profile', [

            'towns' => $towns,

        ]);
    }
    public  function updateProfile(Request $request,$id){

        $result=$this->updateUser($request->all(),$id);

        Alert::success('Başarılı', 'Güncelleme gerçekleşti.');
        return redirect()->back();
    }
}
