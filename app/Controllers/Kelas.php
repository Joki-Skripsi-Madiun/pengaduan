<?php

namespace App\Controllers;


class Kelas extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'kelas' => $this->kelasModel->getkelas(),
        ];
        $no = 1;
        foreach ($data['kelas'] as $row) {
            $dataRow['no'] = $no++;
            $dataRow['setting'] = $this->landingModel->getlanding(1);
            $dataRow['jumlahKelas'] = $this->siswaModel->hitungJumlahSiswaKelas($row['id_kelas']);
            $dataRow['row'] = $row;
            $data['row' . $row['id_kelas']] = view('kelas/row', $dataRow);
        }
        return view('kelas/index', $data);
    }


    public function save()
    {
        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kelas Harus diisi',
                ]
            ],
            'wali_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wali Kelas Harus diisi',
                ]
            ],
            'nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP Harus diisi'

                ]
            ]


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->kelasModel->save([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'wali_kelas' => $this->request->getVar('wali_kelas'),
            'nip' => $this->request->getVar('nip')


        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/kelas');
    }

    public function edit($id_kelas)
    {
        $kelas = $this->kelasModel->getKelas($id_kelas);
        if (empty($kelas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Surat Tidak ditemukan !');
        }

        $kelas = $this->kelasModel;
        $data = [
            'title' => 'Ubah Data Kelas',
            'validation' => \Config\Services::validation(),

            'kelas' => $this->kelasModel->getKelas($id_kelas),

        ];
        return view('kelas/edit', $data);
    }



    public function update($id_kelas)
    {
        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kelas Harus diisi',
                ]
            ],
            'wali_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wali Kelas Harus diisi',
                ]
            ],
            'nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP Harus diisi'

                ]
            ]


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->kelasModel->save([
            'id_kelas' => $id_kelas,
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'wali_kelas' => $this->request->getVar('wali_kelas'),
            'nip' => $this->request->getVar('nip'),

        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/kelas');
    }

    public function delete($id_kelas)
    {
        $siswa = $this->siswaModel->where('id_kelas', $id_kelas)->findAll();
        foreach ($siswa as $s) {
            $this->pelanggaranModel->deletePelanggaran($s['id_siswa']);
            $this->prestasiModel->deletePrestasi($s['id_siswa']);
        }

        $this->siswaModel->deleteSiswa($id_kelas);
        $this->kelasModel->delete($id_kelas);

        session()->setFlashdata('pesan', 'Data Kelas Berhasil Dihapus.');
        return redirect()->to('/kelas');
    }
}
