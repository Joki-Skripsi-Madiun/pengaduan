<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cetak Disposisi</title>
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
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-2 d-flex justify-content-end">
                <img src="<?= base_url(); ?>/img/logo.jpg" height="100px">
            </div>
            <div class="col text-center">
                <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"> PEMERINTAH PROVINSI JAWA TIMUR<br>
                    DINAS PENDIDIKAN</div>
                <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>SMA NEGERI 1 JETIS</b></div>
                <div style="font-size: 10px; font-family:'Times New Roman', Times, serif;">Alamat : Jl. Sukowati, Kutuwetan, Jetis, Telp.(0352) 33142 Ponorogo 63473<br>Email : smansatujetisponorogo@gmail.com/ Website : www.sman1jetis-ponorogo.sch.id</div>
                <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>PONOROGO</b></div>
            </div>
            <div class="col-2"></div>

        </div>
        <hr class="new4">


        <div class="col text-center">
            <div style="font-size: 20px; font-family:'Times New Roman', Times, serif;"><b>LEMBAR DISPOSISI</b></div>

        </div>
        <div>
            <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><b><u><?= (old('jenis_disposisi')) ? old('jenis_disposisi') : $disposisi['jenis_disposisi']; ?></u></b>
            </div>
            <div class="row">
                <div class="col">No. Agenda</div>
                <div class="col">: <?= (old('no_disposisi')) ? old('no_disposisi') : $disposisi['no_disposisi']; ?></div>
                <div class="col">Tanggal Penyelesaian : <?= date('d-m-Y', strtotime($disposisi['tgl1_disposisi']))  ?></div>
            </div>
            <div class="row">
                <div class="col">Tanggal</div>
                <div class="col">: <?= date('d-m-Y', strtotime($disposisi['tgl2_disposisi']))  ?></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">Perihal</div>
                <div class="col">: <?= (old('perihal_disposisi')) ? old('perihal_disposisi') : $disposisi['perihal_disposisi']; ?></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">Tanggal</div>
                <div class="col">: <?= date('d-m-Y', strtotime($disposisi['tglselesai_disposisi']))  ?></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">Asal</div>
                <div class="col">: <?= (old('asal_disposisi')) ? old('asal_disposisi') : $disposisi['asal_disposisi']; ?></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col-6 text-wrap">Instruksi/Informasi :
                    <br>
                    <p class="text-break">
                        <?= (old('informasi_disposisi')) ? old('informasi_disposisi') : $disposisi['informasi_disposisi']; ?>
                    </p>


                </div>

                <div class="col-6">Diteruskan Kepada:
                    <br>
                    <?= (old('terusan_disposisi')) ? old('terusan_disposisi') : $disposisi['terusan_disposisi']; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">Catatan :
                    <br>
                    <p class="text-break">
                        <?= (old('catatan_disposisi')) ? old('catatan_disposisi') : $disposisi['catatan_disposisi']; ?>
                    </p>
                </div>
                <div class="col"></div>
            </div>
            <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;" class="row">
                <div class="col-6"></div>
                <div class="col-6">Jetis, <?= date('d-m-Y', strtotime($disposisi['tgl2_disposisi']))  ?><br>Kepala SMA N 1 Jetis</div>
                <div style="font-size: 15px; font-family:'Times New Roman', Times, serif; height:150px" class="row p-0">
                    <div class="col-6 p-0"></div>
                    <div class="col-6 ps-5 mt-3">
                        <?php if ($disposisi['status_disposisi'] == 1) { ?>
                            <img class="ms-3" width="100px" src="<?= $ttd ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
                <div style="font-size: 15px; font-family:'Times New Roman', Times, serif;" class="row">
                    <div class="col-6"></div>
                    <div class="col-6"><b><u> H.MUKHA.ASLAM ASHURI, MM.</u></b><br>NIP.19680321 199703 1 003</div>
                </div>
            </div>
            <!-- <table>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Nama</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">CHESIYA NOVIA</td>
           
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Tanggal Penyelesain</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Tanggal</td>
            <td>:</td>
            <td colspan="4" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
           
        </tr>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Perihal</td>
            <td>:</td>
            <td colspan="4" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
        </tr>
       <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Tanggal</td>
            <td>:</td>
            <td colspan="4" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Asal</td>
            <td>:</td>
            <td colspan="4" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Intruksi / Informasi</td>
            <td>:</td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
            
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Diteruskan Kepada</td>
            <td>:</td>
            <td colspan="2" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"></td>
        </tr>
        <tr>
            <td colspan="3"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;">BARYYY</td>
            <td></td>
            <td colspan="2" style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><br>1. Kepala Sekolah<br>2. Guru Kelas</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Catatan</td>
            <td>:</td>
            <td colspan="4" style="font-size: 15px; font-family:'Times New Roman', Times, serif;">asasasasasaaasasasasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</td>
        </tr>
         <tr>
            <td colspan="4"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> </td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Ponorogo,</td>
        </tr>
         <tr>
            <td colspan="4"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> </td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Kepala Sekolah</td>
        </tr>
        <tr>
            <td colspan="4"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> </td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><br></td>
        </tr>
        <tr>
            <td colspan="4"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> </td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;"><br></td>
        </tr>
        <tr>
            <td colspan="4"  style="font-size: 15px; font-family:'Times New Roman', Times, serif;"> </td>
            <td style="font-size: 15px; font-family:'Times New Roman', Times, serif;">Drs.AYUN PRIYONO</td>
        </tr>
    </table> -->
        </div>

    </div>





    <script>
        window.print();
    </script>

    <script src="<?= base_url(); ?>/assets/assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/dashboard.js"></script>


</body>



</html>