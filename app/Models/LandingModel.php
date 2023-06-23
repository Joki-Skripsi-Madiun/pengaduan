<?php

namespace App\Models;

use CodeIgniter\Model;

class LandingModel extends Model
{
    protected $table      = 'setting';
    protected $primaryKey = 'id_setting';
    protected $allowedFields = ['id_setting','judul_setting','keterangan_setting','alamat_sekolah','tlp_sekolah','website_sekolah','logo'];
    // protected $useTimestamps = true;


    public function getLanding($id_setting = false)
    {
        if ($id_setting == false) {
            return $this->findAll();
        }
        return $this->where(['id_setting' => $id_setting])->first();
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
