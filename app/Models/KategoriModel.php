<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori_pelanggaran';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['id_kategori', 'nama_kategori'];
    // protected $useTimestamps = true;


    public function getKategori($id_kategori = false)
    {
        if ($id_kategori == false) {
            return $this->findAll();
        }
        return $this->where(['id_kategori' => $id_kategori])->first();
    }
    public function joinSurat($status)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_surat');
        $builder->select('*');
        $builder->join('tb_jenis', 'tb_jenis.id_jenis = tb_surat.id_jenis');
        $builder->where('status', $status);
        $builder->orderBy('jenis.id_jenis', 'ACS');
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
