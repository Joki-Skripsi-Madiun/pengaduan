<?php

namespace App\Controllers;



class Setting extends BaseController
{

    public function edit($id_user)
    {
        $tb_users = $this->datausersModel->getUsers($id_user);
        if (empty($tb_users)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'tb_users' => $this->datausersModel->getusers($id_user),
        ];
        return view('setting', $data);
    }
    public function update($id_user)
    {
        $password = $this->request->getVar('password');
        if ($password == null) {
            $isipassword = $this->request->getVar('ttdLama');
        }
        if ($password != null) {
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
        return redirect()->to('dashboard');
    }
}
