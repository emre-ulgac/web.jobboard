<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSearchController extends ClientController
{
    public function getSearch() {

        $categories = $this->obtainCategories()->data;

        return view('pages.jobs', [
            'categories' => $categories,

        ]);
    }
}
