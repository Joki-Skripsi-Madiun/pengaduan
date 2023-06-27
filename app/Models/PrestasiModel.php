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


    public function joinPrestasi($id_prestasi = false)
    {
        if ($id_prestasi == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('prestasi');
            $builder->select('*');
            $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
            $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
            $builder->orderBy('id_prestasi', 'DESC');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('prestasi');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->where('id_prestasi', $id_prestasi);
        $builder->orderBy('id_prestasi', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function joinPrestasiLimit($limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('prestasi');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->orderBy('id_prestasi', 'DESC');
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function joinPrestasiTingkat($tingkat_prestasi)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('prestasi');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = prestasi.id_siswa');
        $builder->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $builder->where('tingkat_prestasi', $tingkat_prestasi);
        $builder->orderBy('id_prestasi', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function hitungJumlahPrestasi()
    {
        $db = \Config\Database::connect();
        $query = $db->table('prestasi');
        $query->selectCount('id_prestasi');
        $result = $query->countAllResults();
        return $result;
    }
}
