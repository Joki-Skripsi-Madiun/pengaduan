<?php

namespace App\Controllers;


class Kepala extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
             'pengantar' => $this->pengantarModel->getpengantar(),
            'jenis' => $this->jenisModel->getjenis(),
            'disposisi' => $this->disposisiModel->getdisposisi(),
            'tugas' => $this->tugasModel->gettugas(),

        ];
        return view('kepala/index', $data);
    }
    public function keluar()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'surat' => $this->suratModel->getsurat(),

        ];
        return view('surat/keluar', $data);
    }
}