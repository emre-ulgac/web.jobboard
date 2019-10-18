<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = 'http://127.0.0.1:8000/api';
    }

    protected function performRequest($method, $url, $parameters = [])
    {

        $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem')]]);
        $response = $client->request($method, $url, $parameters);
        return $response->getBody()->getContents();
    }

    protected function performGetRequest($url)
    {
        $contents = $this->performRequest('GET', $url);
        $decoded_contents = json_decode($contents);
        return $decoded_contents;
    }

    protected function performGettRequest($url,$paramaters=[])
    {
        $contents = $this->performRequest('GET', $url,$paramaters);
        $decoded_contents = json_decode($contents);
        return $decoded_contents->data;
    }

    protected function performPostRequest($url,$paramaters=[])
    {
        $contents = $this-> performAuthorizedRequest('POST', $url,$paramaters);
        $decoded_contents = json_decode($contents);

        if ($decoded_contents!=null)
        return $decoded_contents->data;
        else
            return $decoded_contents;
    }

    protected function performUpdateRequest($url,$paramaters=[])
    {
        $contents = $this-> performAuthorizedRequest('PUT', $url,$paramaters);
        $decoded_contents = json_decode($contents);

        if ($decoded_contents!=null)
            return $decoded_contents->data;
        else
            return $decoded_contents;
    }


    protected function performAuthorizedRequest($method,$url,$formParamaters=[])
    {
       $requestParamaters['form_params']=$formParamaters;


        return $this->performRequest($method,$url,$requestParamaters);
    }


    protected function obtainAccessToken($email, $password)
    {

        $contents = $this->performRequest('POST', $this->api . '/get_token', [
            'form_params' => [
                'email' => $email,
                'password' => $password,
            ]
        ]);

        $decoded_contents = json_decode($contents);

        return $decoded_contents;
    }

    public function obtainMe($access_token)
    {
        $access_token = 'Token ' . $access_token;
        $request_parameters['headers']['Authorization'] = $access_token;
        $contents = $this->performRequest('GET', $this->api . '/me', $request_parameters);

        $decoded_contents = json_decode($contents);
        return $decoded_contents;
    }

    /**
     * Functions for Main Title stuff
     */
    protected function obtainAllTag()
    {
        return $this->performGetRequest($this->api . '/tags');
    }

    /**
     * Functions for Home Jobs stuff
     */
    protected function obtainHomeJobs()
    {
        return $this->performGetRequest($this->api . '/jobs');
    }

    protected function createEmployer($paramaters)
    {

        return $this->performPostRequest($this->api . "/employers",$paramaters);
    }

    protected function createUser($paramaters)
    {

        return $this->performPostRequest($this->api . "/users",$paramaters);
    }



    protected function isExistUser($paramaters)
    {

        return $this->performPostRequest($this->api . "/isexistuser",$paramaters);
    }

    protected function isExistEmployer($paramaters)
    {

        return $this->performPostRequest($this->api . "/isexistemployer",$paramaters);
    }



    // Güncel iş ilanları
    protected function obtainCurrentJobs() {
        return $this->performGetRequest($this->api . '/jobs?current=true&status=approved');
    }

    // Tüm iş ilanları
    protected function obtainallJobs() {
        return $this->performGetRequest($this->api . '/jobs?per_page=20');
    }




    // İlan kategorileri
    protected function obtainCategories() {
        return $this->performGetRequest($this->api . '/categories');
    }


    // Tek ilan
    protected function obtainOneJob($slug) {
        return $this->performGetRequest($this->api . "/jobs/{$slug}?state=approved");
    }

    // Yetkinlikler all
    protected function obtainAllSkills() {
        return $this->performGetRequest($this->api . "/skills?state=approved");
    }


   //Tek Employer
    protected function obtainOneEmployer($slug) {
        return $this->performGetRequest($this->api . "/employers/{$slug}");
    }


    //Tek İşçi
    protected function obtainOneUser($slug) {
        return $this->performGetRequest($this->api . "/users/{$slug}");
    }


    //İlan Taslakları
    protected function obtainEmployerDrafts($slug) {
        return $this->performGetRequest($this->api . "/drafts/{$slug}");
    }


    //İlçeler
    protected function obtainTowns() {
        return $this->performGetRequest($this->api . "/towns");
    }
    //post job
    protected function createJob($paramaters)
    {
        return $this->performPostRequest($this->api . "/jobs",$paramaters);
    }

    //update job
    protected function updateJob($paramaters,$id)
    {
        return $this->performUpdateRequest($this->api . "/jobs/".$id,$paramaters);
    }

    //update user
    protected function updateUser($paramaters,$id)
    {
        return $this->performUpdateRequest($this->api . "/users/".$id,$paramaters);
    }

    //update employer
    protected function updateEmployer($paramaters,$id)
    {
        return $this->performUpdateRequest($this->api . "/employers/".$id,$paramaters);
    }

    //job apply
    protected function job_apply($id,$user_id)
    {
        return $this->performUpdateRequest($this->api . "/jobs/".$id."/users/".$user_id);
    }

    //job cancel
    protected function cancelJob($id,$user_id)
    {
        return $this->performUpdateRequest($this->api . "/job/".$id."/user/".$user_id);
    }




}