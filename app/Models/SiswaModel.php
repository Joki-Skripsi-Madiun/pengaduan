<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['id_siswa', 'nama_siswa', 'id_kelas', 'no_induk', 'jenis_kelamin', 'tgl_lahir', 'alamat'];
    // protected $useTimestamps = true;


    public function getSiswa($id_siswa = false)
    {
        if ($id_siswa == false) {
            return $this->findAll();
        }
        return $this->where(['id_siswa' => $id_siswa])->first();
    }
    public function joinSiswa($id_siswa = false)
    {
        if ($id_siswa == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('siswa');
            $builder->select('*');
            $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('siswa');
        $builder->select('*');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->where('id_siswa', $id_siswa);
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function joinSiswaId($id_siswa)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('siswa');
        $builder->select('*');
        $builder->join('tb_jenis', 'tb_jenis.id_jenis = siswa.id_jenis');
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
