<tr>
    <td class="border-bottom-0">
        <h6 class="fw-semibold mb-1"><?= $no; ?>
        </h6>
    </td>
    <td class="border-bottom-0">
        <h6 class="fw-semibold mb-1"><?= $row['nama_kelas']; ?>
        </h6>
    </td>
    <td class="border-bottom-0">
        <h6 class="fw-semibold mb-1"><?= $row['wali_kelas']; ?>
        </h6>
    </td>
    <td class="border-bottom-0">
        <h6 class="fw-semibold mb-1"><?= $row['nip']; ?>
        </h6>
    </td>
    <td class="border-bottom-0">
        <h6 class="fw-semibold mb-1"><?= $jumlahKelas ?>
        </h6>
    </td>
    <td class="border-bottom-0">
        <div class="d-flex align-items-center gap-2">
            <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/kelas/edit/<?= $row['id_kelas'] ?>">
                Edit</a>
            <form action="<?= base_url(); ?>/kelas/<?= $row['id_kelas']; ?>" method="post" class="d-inline">

                <?= csrf_field(); ?>

                <input type="hidden" name="_method" value="DELETE">

                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah Anda Yakin, Menghapus kelas juga akan menghapus siswa,prestasi,pelanggaran di dalam kelas ?');"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a> </button>

            </form>
        </div>
    </td>
</tr>