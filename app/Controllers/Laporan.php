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
        $no = 1;
        foreach ($data['siswa'] as $row) {
            $dataRow['no'] = $no++;
            $dataRow['jumlahBobot'] = $this->pelanggaranModel->joinPelanggaranSumBobot($row['id_siswa']);
            $dataRow['kelas'] = $this->kelasModel->where('id_kelas', $row['id_kelas'])->findAll();
            $dataRow['row'] = $row;
            $data['row' . $row['id_siswa']] = view('laporan/row', $dataRow);
        }
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
