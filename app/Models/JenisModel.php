<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table      = 'jenis_pelanggaran';
    protected $primaryKey = 'id_jenis';
    protected $allowedFields = ['id_jenis', 'bobot', 'nama_jenis', 'id_kategori'];
    // protected $useTimestamps = true;


    public function getJenis($id_jenis = false)
    {
        if ($id_jenis == false) {
            return $this->findAll();
        }
        return $this->where(['id_jenis' => $id_jenis])->first();
    }

    public function hitungJumlahJenis()
    {
        $jenis_pelanggaran = $this->query('SELECT * FROM jenis_pelanggaran');
        return $jenis_pelanggaran->getNumRows();
    }
    public function joinJenis($id_jenis = false)
    {
        if ($id_jenis == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('jenis_pelanggaran');
            $builder->select('*');
            $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
            $builder->orderBy('jenis_pelanggaran.id_jenis', 'ACS');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $db      = \Config\Database::connect();
        $builder = $db->table('jenis_pelanggaran');
        $builder->select('*');
        $builder->join('kategori_pelanggaran', 'kategori_pelanggaran.id_kategori = jenis_pelanggaran.id_kategori');
        $builder->where('id_jenis', $id_jenis);
        $builder->orderBy('jenis_pelanggaran.id_jenis', 'ACS');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
