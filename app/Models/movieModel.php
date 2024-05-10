<?php 
namespace App\Models;
use CodeIgniter\Model;
class movieModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id';                                           
    protected $useTimestamps = true;
    
    protected $allowedFields = ['judul', 'slug', 'sutradara', 'produser', 'cover'];
    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
?>