<?php

namespace App\Controllers;


class Kategori extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'kategori' => $this->kategoriModel->getkategori(),

        ];
        return view('kategori/index', $data);
    }

    public function create()
    {
        $session = session();
        $data = [
            'session' => $session,
            'kategori' => $this->kategoriModel->getkategori(),

        ];
        return view('kategori/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kategori Harus diisi',
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),


        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/kategori');
    }

    public function edit($id_kategori)
    {
        $kategori = $this->kategoriModel->getKategori($id_kategori);
        if (empty($kategori)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data kategori Tidak ditemukan !');
        }

        $kategori = $this->kategoriModel;
        $data = [
            'title' => 'Ubah Data kategori',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategoriModel->getKategori($id_kategori),


        ];
        return view('kategori/edit', $data);
    }

    public function update($id_kategori)
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->kategoriModel->save([
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->request->getVar('nama_kategori'),


        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/kategori');
    }

    public function delete($id_kategori)
    {
        $this->kategoriModel->delete($id_kategori);
        session()->setFlashdata('pesan', 'Data kategori Berhasil Dihapus.');
        return redirect()->to('/kategori');
    }
}
