<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SignUpController extends ClientController
{

    public function getRegister()
    {

        return view('pages.register');
    }

    public function register(Request $request)
    {
        //dd($request);

        if ($request->sb_reg_type=="1"){
            if ($request->name==null || $request->email==null || $request->password==null || $request->terms==null ) {

                Alert::warning('Kayıt Ol', 'Tüm alanları doldurun.');
            }
            $user = $this->createEmployer($request->all());
           Alert::success('Kayıt Başarılı', 'Kaydınız başarıyla oluşturulmuştur, hesabınızı doğrulamak için size bir e-posta gönderdik. Hesabınızı gelen link üzerinden doğruladıktan sonra giriş yapabilirsiniz.');
        }

        if ($request->sb_reg_type=="0")
            $user = $this->createUser($request->all());
        Alert::success('Kayıt Başarılı', 'Kaydınız başarıyla oluşturulmuştur, hesabınızı doğrulamak için size bir e-posta gönderdik. Hesabınızı gelen link üzerinden doğruladıktan sonra giriş yapabilirsiniz.');

        return view('pages.register');
    }

}
