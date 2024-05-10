<?php


namespace App\Controllers;

use App\Models\movieModel;


class Movies extends BaseController
{
    protected $movieModel;

    public function __construct()
    {
        helper(['form']);
        $this->movieModel = new movieModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Nama Website',
            'film' => $this->movieModel->getFilm()
        ];

        return view('movies/index', $data);
    }

    public function detail($slug)
    {
        $film = $this->movieModel->getFilm($slug);

        if (empty($film)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul film ' . $slug . ' tidak ditemukan.');
        }

        $data = [
            'title' => 'Detail Film',
            'film' => $film
        ];

        return view('movies/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Tambah Data Film',
            'validation' => \Config\Services::validation()
        ];

        return view('movies/create', $data);
    }

    public function save()
    {
        $validationRules = [
            'judul' => [
                'rules' => 'is_unique[film.judul]|required',
                'errors' => [
                    'required' => 'Judul film harus diisi.',
                    'is_unique' => 'Film sudah ada.'
                ]
            ],
            'sutradara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sutradara film harus diisi.'
                ]
            ],
            'produser' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Produser film harus diisi.'
                ]
            ]
        //     ,  gagal
        // 'cover' => [
        //     'rules' => 'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
        //     'errors' => [
                
        //         'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB.',
        //         'is_image' => 'Yang anda pilih bukan gambar.',
        //         'mime_in' => 'Yang anda pilih bukan gambar.'
        //     ]
        // ]
            ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->to('/movies/create')->withInput()->with('validation', $validation);
        }

        $cover = $this->request->getFile('cover');
        if($cover->getError() == 4){
            $newName = 'luca.jpg';
        } else {
            
            $newName = $cover->getRandomName();
            $cover->move(ROOTPATH . 'public/image', $newName);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->movieModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sutradara' => $this->request->getVar('sutradara'),
            'produser' => $this->request->getVar('produser'),
            'cover' => $newName
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/movies')->with('pesan', 'Data berhasil ditambahkan.');
    }
    public function edit($slug)
    {
        // session();
        $data = [
            'title' => 'Form Ubah Data Film',
            'validation' => \Config\Services::validation(),
            'film' => $this->movieModel->getFilm($slug)
        ];

        return view('movies/edit', $data);
    }
    public function update($slug)
    {
        $validationRules = [
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul film harus diisi.'
                ]
            ],
            'sutradara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sutradara film harus diisi.'
                ]
            ],
            'produser' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Produser film harus diisi.'
                ]
            ]
        ];

        if (!$this->validate($validationRules)) {
            $validation = \Config\Services::validation();
            return redirect()->to('/movies/edit/' . $slug)->withInput()->with('validation', $validation);
        }

        $cover = $this->request->getFile('cover');
        if ($cover->getError() == 1) {
            $film = $this->movieModel->getFilm($slug);
            $newName = $film['cover'];
        } else {
            $newName = $cover->getRandomName();
            $cover->move(ROOTPATH . 'public/image', $newName);
        }

        $this->movieModel->update($slug, [
            'judul' => $this->request->getVar('judul'),
            'sutradara' => $this->request->getVar('sutradara'),
            'produser' => $this->request->getVar('produser'),
            'cover' => $newName
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/movies')->with('pesan', 'Data berhasil diubah.');
    }
}
