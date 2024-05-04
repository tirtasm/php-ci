<?php 
namespace App\Models;
use CodeIgniter\Model;
class filmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id';                                           
    protected $useTimestamps = true;
    
    protected $allowedFields = ['judul', 'slug', 'genre', 'produser', 'sutradara', 'penulis', 'produksi', 'tahun', 'pemain', 'sinopsis', 'poster'];
    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    
}
?>