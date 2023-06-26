<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table      = 'tb_tugas';
    protected $primaryKey = 'id_tugas';
    protected $allowedFields = ['id_tugas', 'no_tugas', 'nama_tugas', 'nip_tugas', 'jabatan_tugas', 'unit_tugas', 'isi_tugas', 'tgl_tugas', 'hari_tugas', 'jam_tugas', 'tempat_tugas', 'status_tugas'];
    // protected $useTimestamps = true;


    public function getTugas($id_tugas = false)
    {
        if ($id_tugas == false) {
            return $this->findAll();
        }
        return $this->where(['id_tugas' => $id_tugas])->first();
    }

    public function hitungJumlahTugas()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_tugas');
        $query->selectCount('id_tugas');
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahTugasAcc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_tugas');
        $query->selectCount('id_tugas');
        $query->where('status_tugas', 1);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahTugasNoacc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_tugas');
        $query->selectCount('id_tugas');
        $query->where('status_tugas', 0);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
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
