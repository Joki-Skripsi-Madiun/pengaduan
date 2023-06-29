<tr>
    <td><?= $no; ?></td>
    <td><?= $row['nama_siswa']; ?></td>
    <td><?= $kelas[0]['nama_kelas']; ?></td>
    <td><?php if ($jumlahBobot >= 100) { ?>
            <span class="btn btn-danger btn-circle btn-sm">Buruk</span>
        <?php }
        if ($jumlahBobot <= 100) { ?>
            <span class="btn btn-success btn-circle btn-sm">Baik</span>
        <?php } ?>
    </td>
    <td><?= $jumlahBobot; ?></td>

    <td align="center">
        <a href="<?= base_url(); ?>/laporan/pelanggaran/individu/print/<?= $row['id_siswa']; ?>" class="btn btn-warning btn-circle btn-sm">
            Cetak Laporan Individu
        </a>
        <?php if ($jumlahBobot >= 100) { ?>
            <a href="<?= base_url(); ?>/laporan/pelanggaran/sp/print/<?= $row['id_siswa']; ?>" class="btn btn-danger btn-circle btn-sm" title="Ubah Password">
                Cetak Surat Peringatan
            </a>
        <?php } ?>
    </td>
</tr>