<?php

namespace App\Models;

use CodeIgniter\Model;

class DisposisiModel extends Model
{
    protected $table      = 'tb_disposisi';
    protected $primaryKey = 'id_disposisi';
    protected $allowedFields = ['id_disposisi', 'jenis_disposisi', 'no_disposisi', 'tgl1_disposisi', 'perihal_disposisi', 'tgl2_disposisi', 'asal_disposisi', 'informasi_disposisi', 'catatan_disposisi', 'tglselesai_disposisi', 'terusan_disposisi', 'status_disposisi'];
    // protected $useTimestamps = true;


    public function getDisposisi($id_disposisi = false)
    {
        if ($id_disposisi == false) {
            return $this->findAll();
        }
        return $this->where(['id_disposisi' => $id_disposisi])->first();
    }

    public function hitungJumlahDisposisi()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_disposisi');
        $query->selectCount('id_disposisi');
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahDisposisiAcc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_disposisi');
        $query->selectCount('id_disposisi');
        $query->where('status_disposisi', 1);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }

    public function hitungJumlahDisposisiNoacc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tb_disposisi');
        $query->selectCount('id_disposisi');
        $query->where('status_disposisi', 0);
        $result = $query->countAllResults();
        // $result = $query->get()->getRow()->num_rows;
        return $result;
    }
}
