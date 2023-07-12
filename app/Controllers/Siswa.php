<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use PhpOffice\PhpSpreadsheet\IOFactory;

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

    public function import()
    {
        $file = $this->request->getFile('excel_file');

        if ($file->isValid() && $file->getExtension() == 'xlsx') {
            $spreadsheet = IOFactory::load($file->getTempName());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            // Mulai dari baris kedua untuk menghindari header
            for ($i = 1; $i < count($rows); $i++) {
                $data = [
                    'nama_siswa' => $rows[$i][0],
                    'id_kelas' => $rows[$i][1],
                    'no_induk' => $rows[$i][2],
                    'jenis_kelamin' => $rows[$i][3],
                    'tgl_lahir' => $rows[$i][4],
                    'alamat' => $rows[$i][5],
                    // Tambahkan kolom-kolom lainnya sesuai dengan struktur tabel Anda
                ];

                // Simpan data ke database
                // Ubah "nama_tabel" dengan nama tabel yang sesuai di database Anda
                // dd($data);
                $this->siswaModel->save($data);
            }

            return redirect()->to('/siswa')->with('success', 'Data imported successfully.');
        } else {
            return redirect()->to('/siswa')->with('error', 'Invalid file format.');
        }
    }
    public function download()
    {
        $file = 'import_siswa.xlsx';
        return $this->response->download('assets/' . $file, null);
    }

    public function kelas()
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
        return view('siswa/kelas', $data);
    }

    public function updateByKelas()
    {
        $kelasLama = $this->request->getVar('kelas_lama');
        $kelasBaru = $this->request->getVar('kelas_baru');
        $siswaModel = new SiswaModel();

        // Ambil data siswa berdasarkan kelas
        $siswa = $siswaModel->where('id_kelas', $kelasLama)->findAll();

        if (empty($siswa)) {
            // Jika tidak ada siswa dengan kelas tersebut, tampilkan pesan error
            return "Tidak ada siswa dengan kelas $kelasLama";
        }

        // Looping untuk melakukan update data siswa
        foreach ($siswa as $row) {
            // Lakukan update data siswa di sini
            // Contoh:
            $siswaModel->update($row['id_siswa'], ['id_kelas' => $kelasBaru]);

            // Tambahkan log atau pesan sukses jika diperlukan
        }

        return redirect()->to('/siswa');
    }
}
