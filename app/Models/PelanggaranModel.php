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
            $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
            $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
            $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
            $builder->orderBy('id_pelanggaran', 'DESC');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggaran');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
        $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
        $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_jenis');
        $builder->where('id_pelanggaran', $id_pelanggaran);
        $builder->orderBy('id_pelanggaran', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function joinPelanggaranSumBobot($id_siswa)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggaran');
        $builder->selectSum('jenis_pelanggaran.bobot');
        $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
        $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
        $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
        $builder->where('pelanggaran.id_siswa', $id_siswa);
        $query = $builder->get();
        return $query->getRow()->bobot;
    }
    public function joinPelanggaranLimit($limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggaran');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
        $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
        $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
        $builder->limit($limit);
        $builder->orderBy('id_pelanggaran', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function joinPelanggaranSiswa($id_siswa)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pelanggaran');
        $builder->select('*');
        $builder->join('siswa', 'siswa.id_siswa = pelanggaran.id_siswa');
        $builder->join('kelas', 'kelas.nama_kelas = siswa.id_kelas');
        $builder->join('jenis_pelanggaran', 'jenis_pelanggaran.id_jenis = pelanggaran.id_jenis');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
        $builder->where('pelanggaran.id_siswa', $id_siswa);
        $builder->orderBy('id_pelanggaran', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function hitungJumlahPelanggaran()
    {
        $db = \Config\Database::connect();
        $query = $db->table('pelanggaran');
        $query->selectCount('id_pelanggaran');
        $result = $query->countAllResults();
        return $result;
    }
}
