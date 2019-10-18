<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ClientController;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpKernel\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPostController extends ClientController
{
    public function getJobPost(){

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $categories = $this->obtainCategories()->data;
        $towns=$this->obtainTowns();
        $skills=$this->obtainAllSkills()->data;


        return view('isverenpanel.job-post',[

            'categories' => $categories,
            'towns'      => $towns,
            'skills'     => $skills,
            'user'       => $user
        ]);
    }


    public function getJobUpdate($slug){

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $categories = $this->obtainCategories()->data;
        $towns=$this->obtainTowns();
        $skills=$this->obtainAllSkills()->data;
        $job=$this->obtainOneJob($slug)->data;



        return view('isverenpanel.job-update',[

            'categories' => $categories,
            'towns'      => $towns,
            'skills'     => $skills,
            'job'        => $job,
            'user'       => $user
        ]);
    }



    public function PostJob(Request $request){

        $new_array=array();
        for ($i=0;$i<count($request->skills);$i++){
                $new_array[$i]=$request->skills[$i];
        }
        $request->request->add(['skills' => $new_array]);
          $job=$this->createJob($request->all());
          Alert::success('Başarılı','İlanınız başarıyla oluşturulmuştur.');
         return redirect('/is-ilani/'.$job->slug);
    }

    public function JobUpdate(Request $request,$id){
       //dd($request);
        $job=$this->updateJob($request->all(),$id);
        Alert::success('Başarılı','İlanınız başarıyla güncellenmiştir.');
         return redirect('/is-ilani/'.$job->slug);
    }




}
