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
            $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('siswa');
        $builder->select('*');
        $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
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

    public function hitungJumlahSiswa()
    {
        $db = \Config\Database::connect();
        $query = $db->table('siswa');
        $query->selectCount('id_siswa');
        $result = $query->countAllResults();
        return $result;
    }
}
