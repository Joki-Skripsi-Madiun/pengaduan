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
            'kelas' => $this->kelasModel->getKelas(),
            'joinpelanggaran' => $this->pelanggaranModel->joinpelanggaran(),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];
        $no = 1;
        foreach ($data['siswa'] as $row) {
            $dataRow['no'] = $no++;
            $dataRow['setting'] = $this->landingModel->getlanding(1);
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
        for ($tahun = 200; $tahun <= 2040; $tahun++) {
            $tahun;
        }
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'kelas' => $this->kelasModel->getKelas(),
            'tahun' => $tahun,
            'prestasi' => $this->prestasiModel->getprestasi(),
            'joinprestasi' => $this->prestasiModel->joinprestasi(),

        ];
        return view('laporan/prestasi', $data);
    }

    public function printPrestasi()
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
        return view('laporan/print_prestasi', $data);
    }
    public function cetak_prestasi($id_siswa)
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'prestasi' => $this->prestasiModel->getprestasi(),
            'joinprestasi' => $this->prestasiModel->joinprestasi($id_siswa),

        ];
        return view('laporan/cetak_prestasi', $data);
    }

    public function printPrestasiTingkat()
    {
        //include helper form
        helper(['form']);
        $tingkat = $this->request->getVar('tingkat_prestasi');
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'prestasi' => $this->prestasiModel->getprestasi(),
            'joinprestasi' => $this->prestasiModel->joinPrestasiTingkat($tingkat),

        ];
        return view('laporan/print_prestasi', $data);
    }

    public function printPrestasiKelas()
    {
        //include helper form
        helper(['form']);
        $kelas = $this->request->getVar('kelas');
        $tahun = $this->request->getVar('tahun');
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'prestasi' => $this->prestasiModel->getprestasi(),
            'joinprestasi' => $this->prestasiModel->joinPrestasiKelas($kelas, $tahun),

        ];
        return view('laporan/print_prestasi', $data);
    }

    public function printPelanggaran()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinpelanggaran(),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];

        return view('laporan/print_pelanggaran', $data);
    }

    public function printPelanggaranKelas()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $kelas = $this->request->getVar('kelas');
        $tahun = $this->request->getVar('tahun');
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinPelanggaranKelas($kelas, $tahun),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];

        return view('laporan/print_pelanggaran', $data);
    }

    public function printPelanggaranDetail($id_siswa)
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinPelanggaranSiswa($id_siswa),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];

        return view('laporan/print_pelanggaran_siswa', $data);
    }

    public function printPelanggaranSP($id_siswa)
    {
        //include helper form
        helper(['form']);
        $session = session();
        $tanggal = $this->request->getVar('tanggal');
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'tanggal' => $tanggal,
            'joinpelanggaran' => $this->pelanggaranModel->joinPelanggaranSiswa($id_siswa),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];

        return view('laporan/print_pelanggaran_sp', $data);
    }

    public function tanggalPelanggaranSP($id_siswa)
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinPelanggaranSiswa($id_siswa),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];

        return view('laporan/print', $data);
    }

    public function printPelanggaranSiswa($id_siswa)
    {
        //include helper form
        helper(['form']);
        $session = session();
        $tanggal = $this->request->getVar('tanggal');
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getPelanggaran(),
            'jenis' => $this->jenisModel->getjenis(),
            'tanggal' => $tanggal,
            'joinpelanggaran' => $this->pelanggaranModel->joinPelanggaranSiswa($id_siswa),
            'joinsiswa' => $this->siswaModel->joinsiswa(),

        ];
        return view('laporan/print_pelanggaran_siswa', $data);
    }
}
