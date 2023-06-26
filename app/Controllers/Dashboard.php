<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->hitungJumlahSiswa(),
            'kelas' => $this->kelasModel->hitungJumlahKelas(),
            'pelanggaran' => $this->pelanggaranModel->hitungJumlahPelanggaran(),
            'prestasi' => $this->prestasiModel->hitungJumlahPrestasi(),
            'pelanggaranAll' => $this->pelanggaranModel->joinPelanggaranLimit(3),
            'prestasiAll' => $this->prestasiModel->joinPrestasiLimit(3),
            'active'  => 'dashboard'
        ];
        return view('dashboard/index', $data);
    }
}
