<?php

namespace App\Controllers;

use App\Models\filmModel;

class Movies extends BaseController
{
    protected $filmModel;
    public function __construct()
    {
        $this->filmModel = new filmModel();
    }
    public function index()
    {
        // $film = $this->filmModel->findAll();
        $data = [
            'title' => 'Home | Nama Website',
            'film' => $this->filmModel->getFilm()
        ];

        // $db = \Config\Database::connect();
        // $film = $db->query("SELECT * FROM film");   
        // foreach ($film->getResultArray() as $row) {
        //     d($row);
        // }   

        return view('movies/index', $data);

    }
    public function detail($slug)
    {
        
        $data = [
            'title' => 'Detail Film',
            'film' => $this->filmModel->getFilm($slug)
        ];
        return view('movies/detail', $data);
    }
}

?>