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
            'users' => $this->datausersModel->getusers(),
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
    public function save()
    {
        if (!$this->validate(
            [

                'nama_user'          => 'required|min_length[3]|max_length[50]',
                'username'      => 'required|min_length[6]|max_length[50]|is_unique[users.username]',
                'level'          => 'required',
                'password'      => 'required|min_length[6]|max_length[200]',

            ]

        )) {
            return redirect()->to('user')->withInput();
        }

        $this->datausersModel->save([
            'nama_user' => $this->request->getVar('nama_user'),
            'username' => $this->request->getVar('username'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/user');
    }

    public function edit($id_user)
    {
        $users = $this->datausersModel->getUsers($id_user);
        if (empty($users)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'users' => $this->datausersModel->getusers($id_user),

        ];
        return view('user/edit', $data);
    }
    public function update($id_user)
    {


        if (!$this->validate(

            [
                'nama_user'          => 'required|min_length[3]|max_length[50]',
                'username'      => 'required|min_length[6]|max_length[50]|is_unique[users.username]',
                'level'          => 'required',
                'password'      => 'required|min_length[6]|max_length[200]',


            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->datausersModel->save([
            'id_user' => $id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'username' => $this->request->getVar('username'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/user');
    }
    public function delete($id_user)
    {
        $this->datausersModel->delete($id_user);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/user');
    }
}
