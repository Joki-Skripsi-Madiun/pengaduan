<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Pelanggaran</h5>
                    <hr>
                    <form class="row g-3" action="/pelanggaran/update/<?= $joinpelanggaran[0]['id_pelanggaran'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $joinpelanggaran[0]['waktu'] ?>" name="waktu" readonly aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Siswa</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_siswa">
                                <option value="<?= $joinpelanggaran[0]['id_siswa'] ?>" selected><?= $joinpelanggaran[0]['nama_siswa'] ?></option>
                                <?php foreach ($siswa as $k) : ?>
                                    <option value="<?= $k['id_siswa'] ?>"><?= $k['nama_siswa'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori Pelanggaran</label>
                            <select class="form-select" id="kategori" aria-label="Floating label select example" name="id_kategori">
                                <option selected value="<?= $joinpelanggaran[0]['id_kategori'] ?>"><?= $joinpelanggaran[0]['nama_kategori'] ?></option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Pelanggaran</label>
                            <select class="form-select" id="jenis" name="id_jenis">
                                <option selected value="<?= $joinpelanggaran[0]['id_jenis'] ?>"><?= $joinpelanggaran[0]['nama_jenis'] ?></option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pelapor</label>
                            <input type="text" value="<?= $joinpelanggaran[0]['pelapor'] ?>" class="form-control" name="pelapor" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Catatan</label>
                            <textarea type="text" value="<?= $joinpelanggaran[0]['catatan'] ?>" class="form-control" name="catatan" id="exampleInputEmail1" aria-describedby="emailHelp"> <?= $joinpelanggaran[0]['catatan'] ?></textarea>

                        </div>


                        <label for="floatingInput">Foto</label>


                        <div class="col-12 mb-3">
                            <img src="<?php echo base_url(); ?>/img/<?= (old('foto_pelanggaran') ? old('foto_pelanggaran') : $joinpelanggaran[0]['foto_pelanggaran']); ?>" width="100">
                            <br>
                        </div>
                        <div>
                            <input type="hidden" name="oldfoto" value="<?= (old('foto_pelanggaran') ? old('foto_pelanggaran') : $joinpelanggaran[0]['foto_pelanggaran']); ?>">
                            <input class="form-control form-control-sm" value="<?= old('foto_pelanggaran') ?>" name="foto_pelanggaran" id="formFileSm" type="file">
                            <span>*ukuran foto 200px x 200px</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#kategori').on('change', function() {
                var id_kategori = $(this).val();
                if (id_kategori != '') {
                    $.ajax({
                        url: "<?php echo base_url('getJenis'); ?>",
                        method: "POST",
                        data: {
                            id_kategori: id_kategori
                        },
                        dataType: "json",
                        success: function(data) {
                            $('#jenis').html(data);
                        }
                    });
                } else {
                    $('#jenis').html('<option value="">Pilih Jenis</option>');
                }
            });
        });
    </script>

    <?= $this->endSection(); ?>