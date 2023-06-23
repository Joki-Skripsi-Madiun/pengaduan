<?php

namespace App\Controllers;


class Jenis extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'kategori' => $this->kategoriModel->getkategori(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinjenis' => $this->jenisModel->joinjenis(),

        ];
        return view('jenis/index', $data);
    }

    public function create()
    {
        $session = session();
        $data = [
            'session' => $session,
            'kategori' => $this->kategoriModel->getkategori(),
            'jenis' => $this->jenisModel->getjenis(),
            'joinjenis' => $this->jenisModel->joinjenis(),

        ];
        return view('jenis/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama jenis Harus diisi',
                ]
            ],
            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kategori Harus diisi',
                ]
            ],
            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bobot Harus diisi',
                ]
            ]



        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->jenisModel->save([
            'nama_jenis' => $this->request->getVar('nama_jenis'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'bobot' => $this->request->getVar('bobot'),


        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/jenis');
    }

    public function edit($id_jenis)
    {
        $jenis = $this->jenisModel->getJenis($id_jenis);
        if (empty($jenis)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data jenis Tidak ditemukan !');
        }

        $jenis = $this->jenisModel;
        $data = [
            'title' => 'Ubah Data jenis',
            'validation' => \Config\Services::validation(),
            'jenis' => $this->jenisModel->getJenis($id_jenis),
            'kategori' => $this->kategoriModel->getkategori(),
            'joinjenis' => $this->jenisModel->joinjenis($id_jenis),



        ];
        return view('jenis/edit', $data);
    }

    public function update($id_jenis)
    {
        if (!$this->validate([
            'nama_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama jenis Harus diisi',
                ]
            ],
            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kategori Harus diisi',
                ]
            ],
            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bobot Harus diisi',
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->jenisModel->save([
            'id_jenis' => $id_jenis,
            'nama_jenis' => $this->request->getVar('nama_jenis'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'bobot' => $this->request->getVar('bobot'),

        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/jenis');
    }

    public function delete($id_jenis)
    {

        $this->jenisModel->delete($id_jenis);
        session()->setFlashdata('pesan', 'Data Surat Berhasil Dihapus.');
        return redirect()->to('/jenis');
    }
    // // Keluar
    // public function keluar()
    // {
    //     //include helper form
    //     helper(['form']);
    //     $session = session();
    //     $data = [
    //         'session' => $session,
    //         'surat' => $this->suratModel->getsurat(),

    //     ];
    //     return view('surat/keluar', $data);
    // }
}
