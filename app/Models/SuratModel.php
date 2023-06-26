<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table      = 'tb_surat';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = ['id_surat', 'nama_surat', 'asal_surat', 'id_jenis', 'jenis_surat', 'file_surat', 'status'];
    protected $useTimestamps = true;


    public function getSurat($id_surat = false)
    {
        if ($id_surat == false) {
            return $this->findAll();
        }
        return $this->where(['id_surat' => $id_surat])->first();
    }
    public function joinSurat($status)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_surat');
        $builder->select('*');
        $builder->join('tb_jenis', 'tb_jenis.id_jenis = tb_surat.id_jenis');
        $builder->where('status', $status);
        $query = $builder->get();
        return $query;
    }
    public function joinSuratId($id_surat)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_surat');
        $builder->select('*');
        $builder->join('tb_jenis', 'tb_jenis.id_jenis = tb_surat.id_jenis');
        $builder->where('id_surat', $id_surat);
        $query = $builder->get();
        return $query;
    }

    public function hitungJumlahDisposisi()
    {
        $tb_disposisi = $this->query('SELECT * FROM tb_disposisi');
        return $tb_disposisi->getNumRows();
    }

    public function hitungJumlahSuratMasuk()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_surat');
        $query->selectCount('id_surat');
        $query->where('status', 1);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }
    public function hitungJumlahSuratMasukJenis($id_jenis)
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_surat');
        $query->selectCount('id_surat');
        $query->where('status', 1);
        $query->where('id_jenis', $id_jenis);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahSuratKeluar()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_surat');
        $query->selectCount('id_surat');
        $query->where('status', 1);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahSuratKeluarJenis($id_jenis)
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_surat');
        $query->selectCount('id_surat');
        $query->where('status', 2);
        $query->where('id_jenis', $id_jenis);
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
