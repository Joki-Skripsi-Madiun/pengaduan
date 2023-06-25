<?php

namespace App\Models;

use CodeIgniter\Model;

class PengantarModel extends Model
{
    protected $table      = 'tb_pengantar';
    protected $primaryKey = 'id_pengantar';
    protected $allowedFields = ['id_pengantar', 'no_pengantar', 'tujuan_pengantar', 'isi_pengantar', 'banyak_pengantar', 'keterangan_pengantar', 'unit_pengantar', 'penerima_pengantar', 'tgl_pengantar', 'nama_pengantar', 'nip_pengantar', 'status_pengantar'];
    // protected $useTimestamps = true;


    public function getPengantar($id_pengantar = false)
    {
        if ($id_pengantar == false) {
            return $this->findAll();
        }
        return $this->where(['id_pengantar' => $id_pengantar])->first();
    }

    public function hitungJumlahPengantar()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_pengantar');
        $query->selectCount('id_pengantar');
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahPengantarAcc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_pengantar');
        $query->selectCount('id_pengantar');
        $query->where('status_pengantar', 1);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahPengantarNoacc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_pengantar');
        $query->selectCount('id_pengantar');
        $query->where('status_pengantar', 0);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }
}
