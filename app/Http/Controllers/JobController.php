<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class JobController extends ClientController
{
    public function getOneEvent($slug) {
        $event = $this->obtainOneEvent($slug)->data;
        $event_users = $this->obtainEventUsers($event->identifier)->data;
        if (count($event->tags->data) > 0) {
            $tags = '';
            foreach($event->tags->data as $tag) {
                $tags .= $tag->tag . ',';
            }
            $tags = rtrim($tags, ",");
            $similar_events = $this->obtainSimilarEvents($tags)->data;
        } else {
            $similar_events = '';
        }
        $oncoming_events = $this->obtainOncomingEvents()->data;
        $popular_tags = $this->obtainPopularTags()->data;
        $tags = $this->obtainAllTags()->data;

        return view('event', [
            'event'             => $event,
            'event_users'       => $event_users,
            'similar_events'    => $similar_events,
            'popular_tags'      => $popular_tags,
            'tags'              => $tags,
            'oncoming_events'   => $oncoming_events
        ]);
    }


    public function apply($slug) {



        return redirect()->back();
    }



    public function allJobSearch() {

        $jobs = $this->obtainallJobs()->data;
        $categories=$this->obtainCategories()->data;
        $skills=$this->obtainAllSkills()->data;


        return view('pages.jobsearch', [
            'jobs' => $jobs,
            'categories'=>$categories,
            'skills'    =>$skills

        ]);
    }

    public function employerDrafts($slug) {

        @session_start();

        $user=$this->obtainOneEmployer($_SESSION['me']->slug)->data;

        $jobs = $this->obtainEmployerDrafts($slug)->data;

        return view('isverenpanel.job-draft', [
            'jobs' => $jobs,
             'user'=> $user

        ]);
    }


}
