<?php

namespace App\Controllers;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

use \Mpdf\Mpdf;

class Pengajuan extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'active'  => 'pengantar',
            'pengantar' => $this->pengantarModel->getpengantar(),
            'jenis' => $this->jenisModel->getjenis(),
            'disposisi' => $this->disposisiModel->getdisposisi(),
            'tugas' => $this->tugasModel->gettugas(),
        ];
        return view('pengajuan/index', $data);
    }
    public function tugas()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'active'  => 'tugas',
            'pengantar' => $this->pengantarModel->getpengantar(),
            'jenis' => $this->jenisModel->getjenis(),
            'disposisi' => $this->disposisiModel->getdisposisi(),
            'tugas' => $this->tugasModel->gettugas(),
        ];
        return view('pengajuan/tugas', $data);
    }
    public function disposisi()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'active'  => 'disposisi',
            'pengantar' => $this->pengantarModel->getpengantar(),
            'jenis' => $this->jenisModel->getjenis(),
            'disposisi' => $this->disposisiModel->getdisposisi(),
            'tugas' => $this->tugasModel->gettugas(),
        ];
        return view('pengajuan/disposisi', $data);
    }
    // Pengantar
    public function tambahPengantar()
    {

        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'pengantar' => $this->pengantarModel->getpengantar(),
        ];
        return view('pengajuan/tambahPengantar', $data);
    }
    public function save()
    {
        if (!$this->validate(
            [
                'no_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'tujuan_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tujuan Harus Diisi.',
                    ]
                ],
                'isi_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Isi Harus Diisi.',
                    ]
                ],
                'banyak_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Banyaknya Harus Diisi.',
                    ]
                ],
                'keterangan_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Keterangan Harus Diisi.',
                    ]
                ],
                'unit_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Unit Pengantar Harus Diisi.',
                    ]
                ],
                'penerima_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penerima Harus Diisi.',
                    ]
                ],
                'tgl_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Harus Diisi.',
                    ]
                ],
                'nama_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'nip_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIP Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pengajuan/tambahPengantar')->withInput();
        }

        $this->pengantarModel->save([
            'no_pengantar' => $this->request->getVar('no_pengantar'),
            'tujuan_pengantar' => $this->request->getVar('tujuan_pengantar'),
            'isi_pengantar' => $this->request->getVar('isi_pengantar'),
            'banyak_pengantar' => $this->request->getVar('banyak_pengantar'),
            'keterangan_pengantar' => $this->request->getVar('keterangan_pengantar'),
            'unit_pengantar' => $this->request->getVar('unit_pengantar'),
            'penerima_pengantar' => $this->request->getVar('penerima_pengantar'),
            'tgl_pengantar' => $this->request->getVar('tgl_pengantar'),
            'nama_pengantar' => $this->request->getVar('nama_pengantar'),
            'nip_pengantar' => $this->request->getVar('nip_pengantar'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pengajuan');
    }
    public function detailPengantar($id_pengantar)
    {
        $pengantar = $this->pengantarModel->getPengantar($id_pengantar);
        if (empty($pengantar)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'pengantar',
            'pengantar' => $this->pengantarModel->getpengantar($id_pengantar),

        ];
        return view('pengajuan/detailPengantar', $data);
    }
    public function editPengantar($id_pengantar)
    {
        $pengantar = $this->pengantarModel->getPengantar($id_pengantar);
        if (empty($pengantar)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'pengantar',
            'pengantar' => $this->pengantarModel->getpengantar($id_pengantar),

        ];
        return view('pengajuan/editPengantar', $data);
    }
    public function cekPengantar($id_pengantar)
    {
        $pengantar = $this->pengantarModel->getPengantar($id_pengantar);
        if (empty($pengantar)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekPengantar/' . $id_pengantar)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();
        $data = [

            'validation' => \Config\Services::validation(),
            'pengantar' => $this->pengantarModel->getpengantar($id_pengantar),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cekPengantar', $data);
    }

    public function cetakPengantar($id_pengantar)
    {
        $pengantar = $this->pengantarModel->getPengantar($id_pengantar);
        if (empty($pengantar)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekPengantar/' . $id_pengantar)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();
        $data = [

            'validation' => \Config\Services::validation(),
            'pengantar' => $this->pengantarModel->getpengantar($id_pengantar),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cetakPengantar', $data);
    }
    public function update($id_pengantar)
    {
        if (!$this->validate(
            [
                'no_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'tujuan_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tujuan Harus Diisi.',
                    ]
                ],
                'isi_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Isi Harus Diisi.',
                    ]
                ],
                'banyak_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Banyaknya Harus Diisi.',
                    ]
                ],
                'keterangan_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Keterangan Harus Diisi.',
                    ]
                ],
                'unit_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Unit Pengantar Harus Diisi.',
                    ]
                ],
                'penerima_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penerima Harus Diisi.',
                    ]
                ],
                'tgl_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Harus Diisi.',
                    ]
                ],
                'nama_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'nip_pengantar' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIP Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('editPengantar')->withInput();
        }

        $this->pengantarModel->save([
            'id_pengantar' => $id_pengantar,
            'no_pengantar' => $this->request->getVar('no_pengantar'),
            'tujuan_pengantar' => $this->request->getVar('tujuan_pengantar'),
            'isi_pengantar' => $this->request->getVar('isi_pengantar'),
            'banyak_pengantar' => $this->request->getVar('banyak_pengantar'),
            'keterangan_pengantar' => $this->request->getVar('keterangan_pengantar'),
            'unit_pengantar' => $this->request->getVar('unit_pengantar'),
            'penerima_pengantar' => $this->request->getVar('penerima_pengantar'),
            'tgl_pengantar' => $this->request->getVar('tgl_pengantar'),
            'nama_pengantar' => $this->request->getVar('nama_pengantar'),
            'nip_pengantar' => $this->request->getVar('nip_pengantar'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('pengajuan');
    }
    public function delete($id_pengantar)
    {
        $this->pengantarModel->delete($id_pengantar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('pengajuan');
    }

    //Disposisi

    public function tambahDisposisi()
    {

        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'disposisi' => $this->disposisiModel->getdisposisi(),
        ];
        return view('pengajuan/tambahDisposisi', $data);
    }
    public function saveDisposisi()
    {
        if (!$this->validate(
            [
                'no_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'jenis_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis Harus Diisi.',
                    ]
                ],
                'tgl1_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Selesai Harus Diisi.',
                    ]
                ],
                'perihal_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Perihal Harus Diisi.',
                    ]
                ],
                'tgl2_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Agenda Harus Diisi.',
                    ]
                ],
                'asal_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Asal Disposisi Harus Diisi.',
                    ]
                ],
                'informasi_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Intruksi/Informasi Harus Diisi.',
                    ]
                ],
                'catatan_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Catatan Harus Diisi.',
                    ]
                ],
                'tglselesai_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Dibuat Harus Diisi.',
                    ]
                ],
                'terusan_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Terusan Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pengajuan/tambahDisposisi')->withInput();
        }

        $this->disposisiModel->save([
            'no_disposisi' => $this->request->getVar('no_disposisi'),
            'jenis_disposisi' => $this->request->getVar('jenis_disposisi'),
            'tgl1_disposisi' => $this->request->getVar('tgl1_disposisi'),
            'perihal_disposisi' => $this->request->getVar('perihal_disposisi'),
            'tgl2_disposisi' => $this->request->getVar('tgl2_disposisi'),
            'asal_disposisi' => $this->request->getVar('asal_disposisi'),
            'informasi_disposisi' => $this->request->getVar('informasi_disposisi'),
            'catatan_disposisi' => $this->request->getVar('catatan_disposisi'),
            'tglselesai_disposisi' => $this->request->getVar('tglselesai_disposisi'),
            'terusan_disposisi' => $this->request->getVar('terusan_disposisi'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pengajuan');
    }
    public function editDisposisi($id_disposisi)
    {
        $disposisi = $this->disposisiModel->getdisposisi($id_disposisi);
        if (empty($disposisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'disposisi',
            'disposisi' => $this->disposisiModel->getdisposisi($id_disposisi),

        ];
        return view('pengajuan/editDisposisi', $data);
    }
    public function detailDisposisi($id_disposisi)
    {
        $disposisi = $this->disposisiModel->getdisposisi($id_disposisi);
        if (empty($disposisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'disposisi',
            'disposisi' => $this->disposisiModel->getdisposisi($id_disposisi),

        ];
        return view('pengajuan/detailDisposisi', $data);
    }
    public function updateDisposisi($id_disposisi)
    {
        if (!$this->validate(
            [
                'no_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'jenis_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis Harus Diisi.',
                    ]
                ],
                'tgl1_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Selesai Harus Diisi.',
                    ]
                ],
                'perihal_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Perihal Harus Diisi.',
                    ]
                ],
                'tgl2_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Agenda Harus Diisi.',
                    ]
                ],
                'asal_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Asal Disposisi Harus Diisi.',
                    ]
                ],
                'informasi_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Intruksi/Informasi Harus Diisi.',
                    ]
                ],
                'catatan_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Catatan Harus Diisi.',
                    ]
                ],
                'tglselesai_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Dibuat Harus Diisi.',
                    ]
                ],
                'terusan_disposisi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Terusan Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pengajuan/editDisposisi')->withInput();
        }

        $this->disposisiModel->save([
            'id_disposisi' => $id_disposisi,
            'no_disposisi' => $this->request->getVar('no_disposisi'),
            'jenis_disposisi' => $this->request->getVar('jenis_disposisi'),
            'tgl1_disposisi' => $this->request->getVar('tgl1_disposisi'),
            'perihal_disposisi' => $this->request->getVar('perihal_disposisi'),
            'tgl2_disposisi' => $this->request->getVar('tgl2_disposisi'),
            'asal_disposisi' => $this->request->getVar('asal_disposisi'),
            'informasi_disposisi' => $this->request->getVar('informasi_disposisi'),
            'catatan_disposisi' => $this->request->getVar('catatan_disposisi'),
            'tglselesai_disposisi' => $this->request->getVar('tglselesai_disposisi'),
            'terusan_disposisi' => $this->request->getVar('terusan_disposisi'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pengajuan');
    }
    public function deleteDisposisi($id_disposisi)
    {
        $this->disposisiModel->delete($id_disposisi);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('pengajuan');
    }
    public function cekDisposisi($id_disposisi)
    {
        $disposisi = $this->disposisiModel->getdisposisi($id_disposisi);
        if (empty($disposisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekDisposisi/' . $id_disposisi)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();

        $data = [

            'validation' => \Config\Services::validation(),
            'disposisi' => $this->disposisiModel->getdisposisi($id_disposisi),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cekDisposisi', $data);
    }



    public function cetakDisposisi($id_disposisi)
    {
        $disposisi = $this->disposisiModel->getdisposisi($id_disposisi);
        if (empty($disposisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekDisposisi/' . $id_disposisi)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();
        $data = [

            'validation' => \Config\Services::validation(),
            'disposisi' => $this->disposisiModel->getdisposisi($id_disposisi),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cetakDisposisi', $data);
    }

    // Tugas

    public function tambahTugas()
    {

        helper(['form']);
        $session = session();
        $data = [
            'session' => $session,
            'tugas' => $this->tugasModel->gettugas(),
        ];
        return view('pengajuan/tambahTugas', $data);
    }
    public function saveTugas()
    {
        if (!$this->validate(
            [
                'no_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'nama_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'nip_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nip Harus Diisi.',
                    ]
                ],
                'jabatan_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jabatan Harus Diisi.',
                    ]
                ],
                'unit_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Unit Harus Diisi.',
                    ]
                ],
                'isi_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Isi Harus Diisi.',
                    ]
                ],
                'tgl_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Harus Diisi.',
                    ]
                ],
                'hari_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hari Harus Diisi.',
                    ]
                ],
                'jam_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jam Harus Diisi.',
                    ]
                ],
                'tempat_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tempat Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pengajuan/tambahTugas')->withInput();
        }

        $this->tugasModel->save([
            'no_tugas' => $this->request->getVar('no_tugas'),
            'nama_tugas' => $this->request->getVar('nama_tugas'),
            'nip_tugas' => $this->request->getVar('nip_tugas'),
            'jabatan_tugas' => $this->request->getVar('jabatan_tugas'),
            'unit_tugas' => $this->request->getVar('unit_tugas'),
            'isi_tugas' => $this->request->getVar('isi_tugas'),
            'tgl_tugas' => $this->request->getVar('tgl_tugas'),
            'hari_tugas' => $this->request->getVar('hari_tugas'),
            'jam_tugas' => $this->request->getVar('jam_tugas'),
            'tempat_tugas' => $this->request->getVar('tempat_tugas'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pengajuan');
    }
    public function detailTugas($id_tugas)
    {
        $tugas = $this->tugasModel->gettugas($id_tugas);
        if (empty($tugas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'tugas',
            'tugas' => $this->tugasModel->gettugas($id_tugas),

        ];
        return view('pengajuan/detailTugas', $data);
    }
    public function cekTugas($id_tugas)
    {
        $tugas = $this->tugasModel->gettugas($id_tugas);
        if (empty($tugas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekTugas/' . $id_tugas)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();
        $data = [

            'validation' => \Config\Services::validation(),
            'tugas' => $this->tugasModel->gettugas($id_tugas),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cekTugas', $data);
    }

    public function cetakTugas($id_tugas)
    {
        $tugas = $this->tugasModel->gettugas($id_tugas);
        if (empty($tugas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $ttd = $this->dataakunModel->joinAkunGroup(3);
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url() . '/cekTugas/' . $id_tugas)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('img/' . $ttd[0]['ttd'])
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('H.MUKHA.ASLAM ASHURI, MM.')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);



        $dataUri = $result->getDataUri();
        $data = [

            'validation' => \Config\Services::validation(),
            'tugas' => $this->tugasModel->gettugas($id_tugas),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),
            'ttd' => $dataUri,

        ];
        return view('pengajuan/cetakTugas', $data);
    }
    public function editTugas($id_tugas)
    {
        $tugas = $this->tugasModel->gettugas($id_tugas);
        if (empty($tugas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data = [

            'validation' => \Config\Services::validation(),
            'active'  => 'tugas',
            'tugas' => $this->tugasModel->gettugas($id_tugas),

        ];
        return view('pengajuan/editTugas', $data);
    }
    public function updateTugas($id_tugas)
    {
        if (!$this->validate(
            [
                'no_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No Harus Diisi.',
                    ]
                ],
                'nama_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Harus Diisi.',
                    ]
                ],
                'nip_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nip Harus Diisi.',
                    ]
                ],
                'jabatan_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jabatan Harus Diisi.',
                    ]
                ],
                'unit_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Unit Harus Diisi.',
                    ]
                ],
                'isi_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Isi Harus Diisi.',
                    ]
                ],
                'tgl_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Harus Diisi.',
                    ]
                ],
                'hari_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hari Harus Diisi.',
                    ]
                ],
                'jam_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jam Harus Diisi.',
                    ]
                ],
                'tempat_tugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tempat Harus Diisi.',
                    ]
                ]

            ]

        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('pengajuan/editTugas')->withInput();
        }

        $this->tugasModel->save([
            'id_tugas' => $id_tugas,
            'no_tugas' => $this->request->getVar('no_tugas'),
            'nama_tugas' => $this->request->getVar('nama_tugas'),
            'nip_tugas' => $this->request->getVar('nip_tugas'),
            'jabatan_tugas' => $this->request->getVar('jabatan_tugas'),
            'unit_tugas' => $this->request->getVar('unit_tugas'),
            'isi_tugas' => $this->request->getVar('isi_tugas'),
            'tgl_tugas' => $this->request->getVar('tgl_tugas'),
            'hari_tugas' => $this->request->getVar('hari_tugas'),
            'jam_tugas' => $this->request->getVar('jam_tugas'),
            'tempat_tugas' => $this->request->getVar('tempat_tugas'),

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pengajuan');
    }
    public function deleteTugas($id_tugas)
    {
        $this->tugasModel->delete($id_tugas);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('pengajuan');
    }

    public function accDisposisi($id_disposisi)
    {
        $this->disposisiModel->save([
            'id_disposisi' => $id_disposisi,
            'status_disposisi' => $this->request->getVar('status_disposisi'),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),

        ]);
        session()->setFlashdata('pesan', 'Status surat berhasil update');
        return redirect()->to('pengajuan');
    }
    public function accTugas($id_tugas)
    {
        $this->tugasModel->save([
            'id_tugas' => $id_tugas,
            'status_tugas' => $this->request->getVar('status_tugas'),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),

        ]);
        session()->setFlashdata('pesan', 'Status surat berhasil update');
        return redirect()->to('pengajuan');
    }
    public function accPengantar($id_pengantar)
    {
        $this->pengantarModel->save([
            'id_pengantar' => $id_pengantar,
            'status_pengantar' => $this->request->getVar('status_pengantar'),
            'kepala' => $this->dataakunModel->joinAkunGroup(3),


        ]);
        session()->setFlashdata('pesan', 'Status surat berhasil update');
        return redirect()->to('pengajuan');
    }
}
