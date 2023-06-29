<html>
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.84.0">
<title>Pelanggaran & Prestasi</title>
<link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

<!-- icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Template Stylesheet -->
<link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">


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

    <table width='100%'>
        <tr>
            <td>
                <img src="<?= base_url(); ?>/img/logo_kab.png" height="100px">

            </td>
            <td>
                <center>
                    <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><b>PEMERINTAH KABUPATEN MADIUN<br>
                            DINAS PENDIDIKAN DAN KEBUDAYAAN
                        </b></div>
                    <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>SEKOLAH MENENGAH PERTAMA NEGERI 2 NGLAMES</b></div>
                    <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Desa Sendangrejo Telp.(0351) 499049 Kecamatan Madiun
                        <br>Website : www.smpn2nglames.sch.id Email : smpn2_nglames@yahoo.co.id<br>MADIUN 63151
                    </div>

                </center>
            </td>
        </tr>
    </table>
    <hr class="new4">
    <p align="right" style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Madiun, <?= date_indo(date('Y-m-d')) ?></p>
    <table width='100%'>

        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Nomor</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">360/ /402.302/2023 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; </td>
            <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kepada</td>


        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Sifat</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Segera</td>
            <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">&nbsp; &nbsp; &nbsp; &nbsp;Yth. Orang Tua Siswa <?= $joinsiswa[0]['nama_siswa']; ?> </td>

        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Hal</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Panggilan Orang Tua</td>
            <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">&nbsp; &nbsp; &nbsp; &nbsp;Kelas <?= $joinsiswa[0]['nama_kelas']; ?></td>

        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
            <td></td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
            <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; di-
                TEMPAT
            </td>


        </tr>

    </table>
    <br>
    <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mengharap dengan hormat kehadiran Bapak / Ibu / Saudara orang tua / Wali Murid <?= $joinsiswa[0]['nama_siswa']; ?> besok pada :</div>

    <table width='80%' align="center">

        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> Hari, Tanggal </td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">
                <?= date_indo(date('Y-m-d', strtotime($tanggal))); ?>
            </td>

        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif; width:100px">Waktu</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> <?= date('H:i', strtotime($tanggal)); ?> WIB</td>

        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Acara</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Panggilan Orang Tua</td>

        </tr>
        <tr>

            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Tempat</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">SMP Negeri 2 Nglames</td>

        </tr>


    </table>
    <br>
    <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Demikian surat undangan ini di buat untuk dipenuhi, atas perhatian dan kerjasamanya di sampaikan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; terima kasih</div>
    <br><br>
    <table width='100%'>
        <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">
                <center>Kepala SMP Negeri 2 Nglames</center>
            </td>
        </tr>
        <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">
                <center><br>
                    <br>
                    <br><br><br><br>
                </center>
            </td>
        </tr>
        <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">
                <center><b><u> WIDODO, S.Pd</u></b><br>Pembina Tingkat I<br>NIP. 196902201997031005
                </center>
            </td>
        </tr>

    </table>



    <script>
        window.print();
    </script>
</body>

</html>