<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    protected $table      = 'prestasi';
    protected $primaryKey = 'id_prestasi';
    protected $allowedFields = ['id_prestasi', 'id_siswa', 'nama_prestasi', 'tgl_prestasi', 'tingkat_prestasi', 'keterangan', 'foto_prestasi'];
    // protected $useTimestamps = true;


    public function getPrestasi($id_prestasi = false)
    {
        if ($id_prestasi == false) {
            return $this->findAll();
        }
        return $this->where(['id_prestasi' => $id_prestasi])->first();
    }

    public function hitungJumlahPrestasi()
    {
        $prestasi = $this->query('SELECT * FROM prestasi');
        return $prestasi->getNumRows();
    }
    public function joinPrestasi($id_prestasi = false)
    {
        if ($id_prestasi == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('prestasi');
            $builder->select('*');
            $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
            $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('prestasi');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->where('id_prestasi', $id_prestasi);
        $query = $builder->get();
        return $query->getResultArray();
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
