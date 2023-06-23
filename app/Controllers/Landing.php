<?php

namespace App\Controllers;


class Landing extends BaseController
{
    public function index()
    {
        $id_setting = 1;
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'landing' => $this->landingModel->getlanding($id_setting),

        ];
        return view('landing/index', $data);
    }

    public function landing()
    {
        $id_setting = 1;
        $data = [
            'validation' => \Config\Services::validation(),
            'landing' => $this->landingModel->getlanding($id_setting),

        ];
        return view('landing', $data);
    }

    public function update()
    {
        if (!$this->validate([
            'judul_setting' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Harus diisi',
                ]
            ],
            'keterangan_setting' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Harus diisi',
                ]
            ],
            'alamat_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi',
                ]
            ],
            'tlp_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Telepon Harus diisi',
                ]
            ],
            'website_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Website Harus diisi',
                ]
            ],
            'logo' => [
                'rules' => 'is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]|max_size[logo,2048]',
                'errors' => [
                    'is_image' => 'File yang anda upload bukan gambar',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $fileFoto = $this->request->getFile('logo');

        //apakah tidak ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            // $namaFoto = 'default-akun.png';
            $namaFoto = $this->request->getVar('oldfoto');
        } else {
            //generate nama 

            $namaFoto = $fileFoto->getRandomName();
            // pindahkan file ke folder img
            $fileFoto->move('img', $namaFoto);
        }

        $id_setting = 1;
        $this->landingModel->update($id_setting, [
            'judul_setting' => $this->request->getVar('judul_setting'),
            'keterangan_setting' => $this->request->getVar('keterangan_setting'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'tlp_sekolah' => $this->request->getVar('tlp_sekolah'),
            'website_sekolah' => $this->request->getVar('website_sekolah'),
            'logo' => $namaFoto

        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('landing');
    }
    public function web()
    {

        $data = [
            'validation' => \Config\Services::validation(),
            'landing' => $this->landingModel->getlanding(),

        ];
        return view('web', $data);
    }
}
