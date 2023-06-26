<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Prestasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center my-5">
            <h1>Laporan Prestasi</h1>
            <h4>SMPN 2 Nglames</h4>
            <hr>
            <h5><b>Daftar Prestasi</b></h5>
        </div>
        <table class="table table-bordered">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Siswa</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Kelas</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Jenis Prestasi</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                    </th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($joinprestasi as $u) : ?>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $u['nama_siswa'] ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $u['nama_kelas'] ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $u['nama_prestasi'] ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $u['tingkat_prestasi'] ?></h6>
                        </td>

                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>