<?php

namespace App\Controllers;


class SuratKeluar extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'active'  => 'surat-keluar',
            'surat' => $this->suratModel->joinSurat(2),

        ];
        return view('surat_keluar/index', $data);
    }

    public function create()
    {
        $session = session();
        $data = [
            'session' => $session,
            'surat' => $this->suratModel->getsurat(),
            'jenis' => $this->jenisModel->getJenis(),
        ];
        return view('surat_keluar/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama surat Harus diisi',
                ]
            ],
            'asal_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama asal Harus diisi',
                ]
            ],
            'id_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Surat Harus diisi'

                ]
            ],
            'file_surat' => [
                'rules' => 'mime_in[file_surat,application/pdf]|max_size[file_surat,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa pdf',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $filePDF = $this->request->getFile('file_surat');
        //generate nama file
        $namaFile = $filePDF->getRandomName();
        // pindahkan file ke folder img
        $filePDF->move('pdf', $namaFile);

        $this->suratModel->save([
            'nama_surat' => $this->request->getVar('nama_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'file_surat' => $namaFile,
            'status' => 2,

        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/surat-keluar');
    }

    public function edit($id_surat)
    {
        $surat = $this->suratModel->getSurat($id_surat);
        if (empty($surat)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Surat Tidak ditemukan !');
        }

        $surat = $this->suratModel;
        $data = [
            'title' => 'Ubah Data Surat',
            'validation' => \Config\Services::validation(),
            'jenis' => $this->jenisModel->getJenis(),
            'surat' => $this->suratModel->getSurat($id_surat),
            'active'  => 'surat-keluar',
            'jenisId' => $this->suratModel->joinSuratId($id_surat)

        ];
        return view('surat_keluar/edit', $data);
    }

    public function show($id_surat)
    {
        $surat = $this->suratModel->getSurat($id_surat);
        if (empty($surat)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Surat Tidak ditemukan !');
        }

        $surat = $this->suratModel;
        $data = [
            'title' => 'Ubah Data Surat',
            'validation' => \Config\Services::validation(),
            'jenis' => $this->jenisModel->getJenis(),
            'surat' => $this->suratModel->getSurat($id_surat),
            'active'  => 'surat-keluar',
            'jenisId' => $this->suratModel->joinSuratId($id_surat)

        ];
        return view('surat_keluar/show_surat', $data);
    }

    public function update($id_surat)
    {
        if (!$this->validate([
            'nama_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama surat Harus diisi',
                ]
            ],
            'asal_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama asal Harus diisi',
                ]
            ],
            'id_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Surat Harus diisi'

                ]
            ],
            'file_surat' => [
                'rules' => 'mime_in[file_surat,application/pdf]|max_size[file_surat,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa pdf',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $filePDF = $this->request->getFile('file_surat');
        //apakah tidak ada gambar yang diupload
        if ($filePDF->getError() == 4) {
            $namaPDF = $this->request->getVar('file_suratLama');
        } else {
            //generate nama gambar
            $namaPDF = $filePDF->getRandomName();
            // pindahkan file ke folder img
            $filePDF->move('pdf', $namaPDF);
            // hapus file nama
            unlink('pdf/' . $this->request->getVar('file_suratLama'));
        }

        $this->suratModel->save([
            'id_surat' => $id_surat,
            'nama_surat' => $this->request->getVar('nama_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'file_surat' => $namaPDF,
            'status' => 1,

        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/surat-keluar');
    }

    public function delete($id_surat)
    {
        // cari gambar berdaasarkan id
        $surat = $this->suratModel->find($id_surat);

        //hapus gambar
        unlink('pdf/' . $surat['file_surat']);

        $this->suratModel->delete($id_surat);
        session()->setFlashdata('pesan', 'Data Surat Berhasil Dihapus.');
        return redirect()->to('/surat-keluar');
    }
    // Keluar
    public function keluar()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'surat' => $this->suratModel->getsurat(),

        ];
        return view('surat/keluar', $data);
    }
}
