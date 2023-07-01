<tr>
    <td><?= $no; ?></td>
    <td><?= $row['nama_kelas']; ?></td>
    <td><?= $row['wali_kelas']; ?> (<?= $row['jk_wali']; ?>)</td>
    <td><?= $row['nip']; ?></td>
    <td><?= $jumlahKelas ?></td>
    <td class="border-bottom-0">
        <div class="d-flex align-items-center gap-2">
            <a class="badge bg-warning rounded-2 fw-semibold" href="<?= base_url(); ?>/kelas/edit/<?= $row['id_kelas'] ?>">
                Edit</a>
            <form action="<?= base_url(); ?>/kelas/<?= $row['id_kelas']; ?>" method="post" class="d-inline">

                <?= csrf_field(); ?>

                <input type="hidden" name="_method" value="DELETE">

                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-edit fa-sm text-white-50"></i> Hapus</a> </button>

            </form>
        </div>
    </td>
</tr>