<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Nama Website'
        ];
        
        return view('pages/home', $data);
        
    }
    public function about()
    {
        $data = [
            'title' => 'About | Nama Website'
        ];
        
        return view('pages/about', $data);
        
        
        
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Nama Website',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Abc No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setiabudi No. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        
        return view('pages/contact', $data);
        
        
    }

}
