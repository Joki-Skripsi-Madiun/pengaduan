<?php

namespace App\Controllers;


class Pelanggaran extends BaseController
{
    public function index()
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
        return view('pelanggaran/index', $data);
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
            'id_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Harus diisi',
                ]
            ],
            'pelapor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pelapor Harus diisi',
                ]
            ], 'catatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Catatan Harus diisi',
                ]
            ], 'waktu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Harus diisi',
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $fileFoto = $this->request->getFile('foto_pelanggaran');

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

        $this->pelanggaranModel->save([
            'id_siswa' => $this->request->getVar('id_siswa'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'pelapor' => $this->request->getVar('pelapor'),
            'catatan' => $this->request->getVar('catatan'),
            'waktu' => $this->request->getVar('waktu'),
            'foto_pelanggaran' => $namaFoto


        ]);
        session()->setFlashdata('pesan', 'Tambah Data Surat Masuk Berhasil');
        return redirect()->to('/pelanggaran');
    }

    public function edit($id_pelanggaran)
    {
        $pelanggaran = $this->pelanggaranModel->getPelanggaran($id_pelanggaran);
        if (empty($pelanggaran)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data pelanggaran Tidak ditemukan !');
        }

        $pelanggaran = $this->pelanggaranModel;
        $data = [

            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getpelanggaran($id_pelanggaran),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinpelanggaran($id_pelanggaran),
            'joinsiswa' => $this->siswaModel->joinsiswa(),




        ];
        return view('pelanggaran/edit', $data);
    }

    public function update($id_pelanggaran)
    {
        if (!$this->validate([
            'id_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Siswa Harus diisi',
                ]
            ],
            'id_jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Harus diisi',
                ]
            ],
            'pelapor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pelapor Harus diisi',
                ]
            ], 'catatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Catatan Harus diisi',
                ]
            ], 'waktu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Harus diisi',
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // ambil gambar
        $fileFoto = $this->request->getFile('foto_pelanggaran');

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

        $this->pelanggaranModel->save([
            'id_pelanggaran' => $id_pelanggaran,
            'id_siswa' => $this->request->getVar('id_siswa'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'pelapor' => $this->request->getVar('pelapor'),
            'catatan' => $this->request->getVar('catatan'),
            'waktu' => $this->request->getVar('waktu'),
            'foto_pelanggaran' => $namaFoto


        ]);
        session()->setFlashdata('pesan', 'Ubah Data Surat Masuk Berhasil');
        return redirect()->to('/pelanggaran');
    }

    public function delete($id_pelanggaran)
    {

        $this->pelanggaranModel->delete($id_pelanggaran);
        session()->setFlashdata('pesan', 'Data Surat Berhasil Dihapus.');
        return redirect()->to('/pelanggaran');
    }
    public function view($id_pelanggaran)
    {
        $pelanggaran = $this->pelanggaranModel->getPelanggaran($id_pelanggaran);
        if (empty($pelanggaran)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data pelanggaran Tidak ditemukan !');
        }

        $pelanggaran = $this->pelanggaranModel;
        $data = [

            'siswa' => $this->siswaModel->getsiswa(),
            'pelanggaran' => $this->pelanggaranModel->getpelanggaran($id_pelanggaran),
            'jenis' => $this->jenisModel->getjenis(),
            'joinpelanggaran' => $this->pelanggaranModel->joinpelanggaran($id_pelanggaran),
            'joinsiswa' => $this->siswaModel->joinsiswa(),
            'kelas' => $this->kelasModel->getkelas(),




        ];
        return view('pelanggaran/view', $data);
    }
}
