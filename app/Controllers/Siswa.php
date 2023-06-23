<?php

namespace App\Controllers;


class Siswa extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'kelas' => $this->kelasModel->getkelas(),
            'joinsiswa' => $this->siswaModel->joinsiswa(),
        ];
        return view('siswa/index', $data);
    }
    public function siswa()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'siswa' => $this->siswaModel->getsiswa(),
            'kelas' => $this->kelasModel->getkelas(),
            'joinsiswa' => $this->siswaModel->joinsiswa(),
        ];
        return view('siswa/siswa', $data);
    }


    public function save()
    {

        if (!$this->validate([
            'nama_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama siswa Harus diisi',
                ]
            ],
            'no_induk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Induk Harus diisi',
                ]
            ],
            'id_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas Harus diisi',
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin Harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Harus diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi',
                ]
            ],



        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->siswaModel->save([
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'no_induk' => $this->request->getVar('no_induk'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'alamat' => $this->request->getVar('alamat'),

        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/siswa');
    }
    public function edit($id_siswa)
    {
        $siswa = $this->siswaModel->getSiswa($id_siswa);
        if (empty($siswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak ditemukan !');
        }

        $siswa = $this->siswaModel;
        $data = [
            'title' => 'Ubah Data Siswa',
            'validation' => \Config\Services::validation(),
            'siswa' => $this->siswaModel->getSiswa($id_siswa),
            'kelas' => $this->kelasModel->getkelas(),
            'joinsiswa' => $this->siswaModel->joinsiswa($id_siswa),



        ];
        return view('siswa/edit', $data);
    }
    public function detail($id_siswa)
    {
        $siswa = $this->siswaModel->getSiswa($id_siswa);
        if (empty($siswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak ditemukan !');
        }

        $siswa = $this->siswaModel;
        $data = [
            'title' => 'Ubah Data Siswa',
            'validation' => \Config\Services::validation(),
            'siswa' => $this->siswaModel->getSiswa($id_siswa),
            'kelas' => $this->kelasModel->getkelas(),
            'joinsiswa' => $this->siswaModel->joinsiswa($id_siswa),



        ];
        return view('siswa/detail', $data);
    }
    public function update($id_siswa)
    {

        if (!$this->validate([
            'nama_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama siswa Harus diisi',
                ]
            ],
            'no_induk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Induk Harus diisi',
                ]
            ],
            'id_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas Harus diisi',
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin Harus diisi',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Harus diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi',
                ]
            ],



        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->siswaModel->save([
            'id_siswa' => $id_siswa,
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'no_induk' => $this->request->getVar('no_induk'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'alamat' => $this->request->getVar('alamat'),

        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/siswa');
    }
    public function delete($id_siswa)
    {
        $this->siswaModel->delete($id_siswa);
        session()->setFlashdata('pesan', 'Data siswa Berhasil Dihapus.');
        return redirect()->to('/siswa');
    }
}
