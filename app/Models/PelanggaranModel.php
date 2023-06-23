<?php

namespace App\Models;

use CodeIgniter\Model;

class PelanggaranModel extends Model
{
    protected $table      = 'pelanggaran';
    protected $primaryKey = 'id_pelanggaran';
    protected $allowedFields = ['id_siswa', 'id_kategori', 'id_jenis', 'id_kelas', 'pelapor', 'catatan', 'foto_pelanggaran', 'waktu'];
    // protected $useTimestamps = true;


    public function getPelanggaran($id_pelanggaran = false)
    {
        if ($id_pelanggaran == false) {
            return $this->findAll();
        }
        return $this->where(['id_pelanggaran' => $id_pelanggaran])->first();
    }

    public function joinPelanggaran($id_pelanggaran = false)
    {
        if ($id_pelanggaran == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('pelanggaran');
            $builder->select('*');
            $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
            $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
            $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
            $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_jenis');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggaran');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_jenis');
        $builder->where('id_pelanggaran', $id_pelanggaran);
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
