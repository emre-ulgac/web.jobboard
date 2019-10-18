<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends ClientController
{
    public function getTags() {

        $tags = $this->obtainAllTag()->data;

        return view('test', [

            'tags'              => $tags,

        ]);
    }
}
