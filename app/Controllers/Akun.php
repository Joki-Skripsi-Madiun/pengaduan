<?php

namespace App\Controllers;



class Akun extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'tb_users' => $this->datausersModel->getusers(),
        ];
        return view('user/index', $data);
    }
    public function tambahAkun()
    {
        $data = [

            'validation' => \Config\Services::validation()

        ];
        return view('tambah', $data);
    }
    public function saveAkun()
    {
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'no_induk' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Induk Harus Diisi.',
                    ]
                ],
                'kelas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelas Harus Diisi.',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Harus Diisi.',
                    ]
                ],
                'no_hp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Hp Harus Diisi.',
                    ]
                ],
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Email Harus Diisi.',
                    ]
                ],
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username Harus Diisi.',
                    ]
                ],
                'role' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role Harus Diisi.',
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password Harus Diisi.',
                    ]
                ],
                'ttd' => [
                    'rules' => 'is_image[ttd]|mime_in[ttd,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd,2048]',
                    'errors' => [
                        'is_image' => 'File yang anda upload bukan gambar',
                        'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                        'max_size' => 'Ukuran File Maksimal 2 MB'
                    ]
                ]
            ]

        )) {
            return redirect()->to('user')->withInput();
        }

        // ambil ttd
        $fileGambar = $this->request->getFile('ttd');

        //apakah tidak ada ttd yang diupload
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default-ttd.jpeg';
        } else {
            //generate nama ttd
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('img', $namaGambar);
        }
        $this->datausersModel->save([
            'nama' => $this->request->getVar('nama'),
            'no_induk' => $this->request->getVar('no_induk'),
            'kelas' => $this->request->getVar('kelas'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'ttd' => $namaGambar,

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('user');
    }

    public function editAkun($id_user)
    {
        $tb_users = $this->datausersModel->getUsers($id_user);
        if (empty($tb_users)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'tb_users' => $this->datausersModel->getusers($id_user),

        ];
        return view('user/editUser', $data);
    }

    public function edit($id_user)
    {


        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username Harus Diisi.',
                    ]
                ],
                'ttd' => [
                    'rules' => 'is_image[ttd]|mime_in[ttd,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd,2048]',
                    'errors' => [
                        'is_image' => 'File yang anda upload bukan gambar',
                        'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                        'max_size' => 'Ukuran File Maksimal 2 MB'
                    ]
                ]
            ]
        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $password = $this->request->getVar('password');
        if ($password == null) {
            $isipassword = $this->request->getVar('ttdLama');
        }
        if ($password != null) {
            if (!$this->validate(
                [
                    'nama' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Harus Diisi.',
                        ]
                    ],
                    'username' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Username Harus Diisi.',
                        ]
                    ],
                    'password' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Password Harus Diisi.',
                        ]
                    ],
                    'ttd' => [
                        'rules' => 'is_image[ttd]|mime_in[ttd,image/jpg,image/jpeg,image/gif,image/png]|max_size[ttd,2048]',
                        'errors' => [
                            'is_image' => 'File yang anda upload bukan gambar',
                            'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                            'max_size' => 'Ukuran File Maksimal 2 MB'
                        ]
                    ]
                ]
            )) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
            $isipassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }
        // ambil gambar
        $user = $this->datausersModel->where('id_user', $id_user)->findAll();
        $fileGambar = $this->request->getFile('ttd');
        $gambarLama = $this->request->getVar('ttdLama');
        //apakah tidak ada gambar yang diupload
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('ttdLama');
        } elseif ($gambarLama == 'default-ttd.jpeg') {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('img', $namaGambar);
        } elseif ($user[0]['ttd'] == null) {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('img', $namaGambar);
        } else {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('img', $namaGambar);
            // hapus file nama
            unlink('img/' . $this->request->getVar('ttdLama'));
        }

        $this->datausersModel->save([
            'id_user' => $id_user,
            'nama' => $this->request->getVar('nama'),
            'no_induk' => $this->request->getVar('no_induk'),
            'kelas' => $this->request->getVar('kelas'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role'),
            'password' => $isipassword,
            'ttd' => $namaGambar,
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('user');
    }

    public function deleteAkun($id_user)
    {
        // cari gambar berdaasarkan id
        $akun = $this->datausersModel->find($id_user);

        // cek jika gambar default-akun.jpeg
        if ($akun['ttd'] != 'default-ttd.jpeg') {
            //hapus ttd
            unlink('img/' . $akun['ttd']);
        }
        $this->datausersModel->delete($id_user);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('user');
    }
}
