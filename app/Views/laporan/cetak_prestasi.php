<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Pelanggaran</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logosekolah.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <div class="container">
        <div class="text-center my-5">
            <h1>Laporan Prestasi</h1>

        </div>
        <table class="table" border="1">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6>No</h6>
                    </th>
                    <th>
                        <h6>Tanggal</h6>
                    </th>
                    <th>
                        <h6>Nama Siswa</h6>
                    </th>
                    <th>
                        <h6>Jenis Prestasi</h6>
                    </th>
                    <th>
                        <h6>Tingkat Prestasi</h6>
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($joinprestasi as $u) : ?>
                    <tr>
                        <td>
                            <h6><?= $no++; ?></h6>
                        </td>
                        <td>
                            <h6><?= date('d-m-Y', strtotime($u['tgl_prestasi'])) ?></h6>
                        </td>
                        <td>
                            <h6><?= $u['nama_siswa'] ?></h6>

                        </td>
                        <td>
                            <h6><?= $u['nama_prestasi'] ?></h6>

                        </td>
                        <td>
                            <h6><?= $u['tingkat_prestasi'] ?></h6>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>


    </div>
    <script>
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>