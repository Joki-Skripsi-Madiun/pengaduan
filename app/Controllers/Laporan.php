<?php

namespace App\Controllers;


class Laporan extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getpelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinpelanggaran(),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];
        return view('laporan/index', $data);
    }
    public function prestasi()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'prestasi' => $this->prestasiModel->getprestasi(),
            'joinprestasi' => $this->prestasiModel->joinprestasi(),

        ];
        return view('laporan/prestasi', $data);
    }
}
