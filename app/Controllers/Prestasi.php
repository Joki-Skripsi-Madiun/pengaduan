<?php

namespace App\Controllers;


class Prestasi extends BaseController
{
    public function index()
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
        return view('prestasi/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'id_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Siswa Harus diisi',
                ]
            ],
            'tgl_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Harus diisi',
                ]
            ],
            'tingkat_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tingkatan Harus diisi',
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Harus diisi',
                ]
            ]


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $fileFoto = $this->request->getFile('foto_prestasi');

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

        $this->prestasiModel->save([
            'id_siswa' => $this->request->getVar('id_siswa'),
            'nama_prestasi' => $this->request->getVar('nama_prestasi'),
            'tgl_prestasi' => $this->request->getVar('tgl_prestasi'),
            'tingkat_prestasi' => $this->request->getVar('tingkat_prestasi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto_prestasi' => $namaFoto

        ]);
        session()->setFlashdata('pesan', 'Tambah Prestasi Berhasil');
        return redirect()->to('/prestasi');
    }

    public function edit($id_prestasi)
    {
        $prestasi = $this->prestasiModel->getPrestasi($id_prestasi);
        if (empty($prestasi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi Tidak ditemukan !');
        }

        $prestasi = $this->prestasiModel;
        $data = [
            'title' => 'Ubah Data jenis',
            'validation' => \Config\Services::validation(),
            'siswa' => $this->siswaModel->getSiswa(),
            'kelas' => $this->kelasModel->getkelas(),
            'joinprestasi' => $this->prestasiModel->joinprestasi($id_prestasi),



        ];
        return view('prestasi/edit', $data);
    }

    public function update($id_prestasi)
    {
        if (!$this->validate([
            'id_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Siswa Harus diisi',
                ]
            ],
            'tgl_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Harus diisi',
                ]
            ],
            'tingkat_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tingkatan Harus diisi',
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Harus diisi',
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $fileFoto = $this->request->getFile('foto_prestasi');

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

        $this->prestasiModel->save([
            'id_prestasi' => $id_prestasi,
            'id_siswa' => $this->request->getVar('id_siswa'),
            'nama_prestasi' => $this->request->getVar('nama_prestasi'),
            'tgl_prestasi' => $this->request->getVar('tgl_prestasi'),
            'tingkat_prestasi' => $this->request->getVar('tingkat_prestasi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto_prestasi' => $namaFoto

        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/prestasi');
    }

    public function delete($id_prestasi)
    {

        $this->prestasiModel->delete($id_prestasi);
        session()->setFlashdata('pesan', 'Data Surat Berhasil Dihapus.');
        return redirect()->to('/prestasi');
    }
    public function view($id_prestasi)
    {
        $prestasi = $this->prestasiModel->getPrestasi($id_prestasi);
        if (empty($prestasi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Prestasi Tidak ditemukan !');
        }

        $prestasi = $this->prestasiModel;
        $data = [

            'siswa' => $this->siswaModel->getsiswa(),
            'prestasi' => $this->prestasiModel->getPrestasi($id_prestasi),
            'jenis' => $this->jenisModel->getjenis(),
            'joinprestasi' => $this->prestasiModel->joinPrestasi($id_prestasi),
            'joinsiswa' => $this->siswaModel->joinsiswa(),
            'kelas' => $this->kelasModel->getkelas(),




        ];
        return view('prestasi/view', $data);
    }
}
