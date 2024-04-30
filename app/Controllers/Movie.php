<?php

namespace App\Controllers;

class Movie extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Home | Nama Website'
        ];
        
        return view('movie/index', $data);
        
    }
}

?>