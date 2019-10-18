<?php

namespace App\Http\Controllers\IsciPanel;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;

class AppliesController extends ClientController
{

    public  function getApplies(){
        @session_start();
        $user = $this->obtainOneUser($_SESSION["me"]->slug)->data;



        return view('iscipanel.applications', [

            'jobs' => $user->jobs,
            'user' => $user

        ]);
    }


    public function ApplyJob($id,$user_id){


        $user=$this->obtainOneUser($user_id)->data;

        if (count($user->jobs)==0){
            $job=$this->job_apply($id,$user_id);
            Alert::success('Başvuru Başarılı', 'Başvurunuz iletilmiştir.');
            return redirect()->back()->with('user',$user);
        }
        else {
            foreach ($user->jobs as $job) {

                if ($job->id == $id){
                    Alert::warning('Uyarı', 'Bu ilana daha önce başvurdunuz.');
                    return redirect()->back()->with('user',$user);
                }

            }
        }



    }
    public function cancel_Job($id,$user_id){



         $cancel=$this->cancelJob($id,$user_id);
        Alert::success('Başarılı', 'Başvurunuz başarıyla iptal edilmiştir.');
        return redirect()->back();




    }

}
