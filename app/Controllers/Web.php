<?php

namespace App\Controllers;


class Web extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'landing' => $this->landingModel->getlanding(),

        ];
        return view('web', $data);
    }
}
