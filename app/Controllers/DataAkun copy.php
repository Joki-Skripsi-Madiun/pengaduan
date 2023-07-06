<?php

namespace App\Controllers;


class DataAkun extends BaseController
{
    public function index()
    {
           //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'tb_users' => $this->usersModel->getusers(),
        ];
        return view('data_akun/index', $data);
        // $session = session();
        // $tb_users = $this->usersModel;
        // // $pemesan = $this->datapemesanModel;
        // // $pesanan = $this->datapesananModel;
        // // $akun = $this->dataakunModel;
        // $data = [
        //     'session' => $session,
        //     'tb_users' => $tb_users->getUsers(),
        //     // 'mobil' => $mobil->hitungJumlahMobil(),
        //     // 'pemesan' => $pemesan->hitungJumlahPemesan(),
        //     // 'pesanan' => $pesanan->hitungJumlahPesanan(),
        // ];
        // return view('data_akun/index', $data);
    }


   
}
