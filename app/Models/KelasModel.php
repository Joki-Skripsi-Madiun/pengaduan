<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['id_kelas', 'nama_kelas', 'wali_kelas', 'nip'];
    // protected $useTimestamps = true;


    public function getKelas($id_kelas = false)
    {
        if ($id_kelas == false) {
            return $this->findAll();
        }
        return $this->where(['id_kelas' => $id_kelas])->first();
    }

    public function hitungJumlahKelas()
    {
        $db = \Config\Database::connect();
        $query = $db->table('kelas');
        $query->selectCount('id_kelas');
        $result = $query->countAllResults();
        return $result;
    }
}
