<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class SignInController extends ClientController {

    public function signIn() {

        return view('pages.login', [

        ]);
    }

    public function login(Request $request) {


            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);


            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $email = $request->email;
            $password = $request->password;
            $decoded = $this->obtainAccessToken($email, $password);
            $access_token=$decoded->access_token;
            $me = $decoded->data;


            if ($me->verified == "0") {
                Alert::error('Hata', "Hesabınızı doğrulamadığınız için giriş yapamazsınız. Lütfen size gönderdiğimiz e-posta'dan hesabınızı doğrulayın.");
                return redirect::back();
            }

            @session_start();
            $_SESSION['access_token'] = $access_token;
            $_SESSION['me'] = $me;

            $request->request->add(['first_login' => '0']);
            if ($me->type ==0 && $me->first_login=="1"){
                $first_login="0";
                $user=$this->updateUser($request->all(),$me->id);
                return redirect("/profil/".$me->slug);
            }

            else if ($me->type ==1 && $me->first_login=="1"){
                $first_login="0";
                $user=$this->updateEmployer($request->all(),$me->id);

                return redirect("/profil/".$me->slug);

            }

            else if ($me->type == 0){
                return redirect('iscir/anasayfa');

            }


            else if ($me->type == 1){
                return redirect('isveren/anasayfa');

            }


    }

    public function logout() {
        @session_start();
        @session_destroy();
        return redirect("anasayfa");
    }
}
