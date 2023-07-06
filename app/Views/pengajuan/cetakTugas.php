<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cetak Tugas</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logo.png" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->


    <style>
        /* Red border */
        hr.new1 {
            border-top: 5px black;
        }

        /* Dashed red border */
        hr.new2 {
            border-top: 1px dashed red;
        }

        /* Dotted red border */
        hr.new3 {
            border-top: 1px dotted red;
        }

        /* Thick red border */
        hr.new4 {
            border: 1px solid black;
        }

        /* Large rounded green border */
        hr.new5 {
            border: 10px solid green;
            border-radius: 5px;
        }

        p.a {
            font-family: "Times New Roman", Times, serif;
        }

        table {
            border-collapse: collapse;
        }

        table.stats {
            border-collapse: separate;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="text-center">
            <div class="row">
                <div class="col-1"><img src="<?= base_url(); ?>/img/logo.jpg" height="100px"></div>
                <div class="col-10">
                    <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"> PEMERINTAH PROVINSI JAWA TIMUR<br>
                        DINAS PENDIDIKAN</div>
                    <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>SMA NEGERI 1 JETIS</b></div>
                    <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Alamat : Jl. Sukowati, Kutuwetan, Jetis, Telp.(0352) 33142 Ponorogo 63473<br>Email : smansatujetisponorogo@gmail.com/ Website : www.sman1jetis-ponorogo.sch.id</div>
                    <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>PONOROGO</b></div>
                </div>
                <div class="col-1"></div>
            </div>

        </div>
        <hr class="new4">

        <center>
            <div style="font-size: 25px; font-family:'Times New Roman', Times, serif;"><u>SURAT TUGAS</u></div>
            <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Nomor : <?= $tugas['no_tugas']; ?></div>
        </center>
        <br>
        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Yang bertanda tangan dibawah ini kepada Kepala SMA N 1 Jetis menugaskan kepada :</div>

        <table width='50%'>

            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Nama</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['nama_tugas']; ?></td>

            </tr>
            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">NIP/NIS</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['nip_tugas']; ?></td>

            </tr>
            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Jabatan</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['jabatan_tugas']; ?></td>

            </tr>
            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Unit Kerja</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['unit_tugas']; ?></td>

            </tr>

        </table>
        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['isi_tugas']; ?>besok pada : </div>

        <table width='50%'>

            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Hari / Tanggal</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['hari_tugas']; ?>, <?= date('d-m-Y', strtotime($tugas['tgl_tugas']))  ?></td>

            </tr>
            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Pukul</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['jam_tugas']; ?></td>

            </tr>
            <tr>

                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Tempat</td>
                <td>:</td>
                <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><?= $tugas['tempat_tugas']; ?></td>

            </tr>

        </table>

        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Demikian surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab. </div>
        <br><br>
        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;" class="row">
            <div class="col-6"></div>
            <div class="col-6">Jetis, <?= date('d-m-Y', strtotime($tugas['tgl_tugas']))  ?><br>Kepala SMA N 1 Jetis</div>
        </div>
        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif; height:150px" class="row p-0">
            <div class="col-6 p-0"></div>
            <div class="col-6 ps-5 mt-3">
                <?php if ($tugas['status_tugas'] == 1) { ?>
                    <img class="ms-3" width="100px" src="<?= $ttd ?>" alt="">
                <?php } ?>
            </div>
        </div>
        <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;" class="row">
            <div class="col-6"></div>
            <div class="col-6"><b><u> H.MUKHA.ASLAM ASHURI, MM.</u></b><br>NIP.19680321 199703 1 003</div>
        </div>
    </div>
    </div>









    <script>
        window.print();
    </script>



</body>


</html>