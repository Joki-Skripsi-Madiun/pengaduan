<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama_user'          => 'required|min_length[3]|max_length[50]',
            'username'      => 'required|min_length[6]|max_length[50]|is_unique[users.username]',
            'level'          => 'required',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UsersModel();
            $foto = "default.jpg";
            $data = [
                'nama_user'     => $this->request->getVar('nama_user'),
                'level'     => $this->request->getVar('level'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
