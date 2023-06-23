<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['id_kelas', 'nama_kelas', 'wali_kelas', 'nip', 'jk_wali'];
    // protected $useTimestamps = true;


    public function getKelas($id_kelas = false)
    {
        if ($id_kelas == false) {
            return $this->findAll();
        }
        return $this->where(['id_kelas' => $id_kelas])->first();
    }

    public function hitungJumlahPengantar()
    {
        $tb_pengantar = $this->query('SELECT * FROM tb_pengantar');
        return $tb_pengantar->getNumRows();
    }
    // public function joinMobil($id_akun = false)
    // {
    //     if ($id_akun == false) {
    //         $db      = \Config\Database::connect();
    //         $builder = $db->table('mobil');
    //         $builder->select('*');
    //         $builder->join('merk', 'merk.id_merk = mobil.id_merk');
    //         $query = $builder->get();
    //         return $query;
    //     }
    //     return $this->where(['id_akun' => $id_akun])->first();
    // }



}
