<tr>
    <td><?= $row->id; ?></td>
    <td><?= $row->fullname; ?></td>
    <td><?= $group[0]['name']; ?></td>
    <td align="center">
        <a href="#" class="btn btn-sm btn-circle btn-active-users" data-id="<?= $row->id; ?>" data-active="<?= $row->active == 1 ? 1 : 0; ?>" title="Klik untuk Mengaktifkan atau Menonaktifkan">
            <?= $row->active == 1 ? '<i class="bi bi-check-circle-fill"></i>' : '<i class="bi bi-x-circle-fill"></i>'; ?>
        </a>
    </td>
    <td align="center">
        <a href="<?= base_url(); ?>/data-akun/edit/<?= $row->id; ?>" class="btn btn-warning btn-circle btn-sm" title="Ubah Password">
            <i class="bi bi-pen-fill"></i>
        </a>
        <a href="#" class="btn btn-success btn-circle btn-sm btn-change-group" data-id="<?= $row->id; ?>" title="Ubah Grup">
            <i class="bi bi-list-task"></i>
        </a>
        <a href="<?= base_url(); ?>/data-akun/detail/<?= $row->id; ?>" class="btn btn-info btn-circle btn-sm" title="Detail">
            <i class="bi bi-eye-fill"></i>
        </a>
        <form action="/data-akun/<?= $row->id; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apakah Anda Yakin ?');"> <i class="bi bi-trash-fill"></i> </button>
        </form>
    </td>
</tr>