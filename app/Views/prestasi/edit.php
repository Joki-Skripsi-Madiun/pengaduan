<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Header End -->
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Prestasi</h5>
                        <hr>
                        <form class="row g-3" action="/prestasi//update/<?= $joinprestasi[0]['id_prestasi'] ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Siswa</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_siswa">
                                    <option selected value="<?= $joinprestasi[0]['id_siswa'] ?>"><?= $joinprestasi[0]['nama_siswa'] ?></option>
                                    <?php foreach ($siswa as $k) : ?>
                                        <option value="<?= $k['id_siswa'] ?>"><?= $k['nama_siswa'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Prestasi</label>
                                <input type="text" class="form-control" name="nama_prestasi" value="<?= $joinprestasi[0]['nama_prestasi'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Tingkat</label>
                                <select class="form-select px-3" id="floatingSelect" aria-label="Floating label select example" name="tingkat_prestasi">
                                    <option selected value="<?= $joinprestasi[0]['tingkat_prestasi'] ?>"><?= $joinprestasi[0]['tingkat_prestasi'] ?></option>
                                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <textarea type="text" class="form-control" name="keterangan" value="<?= $joinprestasi[0]['keterangan'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp"><?= $joinprestasi[0]['keterangan'] ?></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" value="<?= $joinprestasi[0]['tgl_prestasi'] ?>" name="tgl_prestasi" aria-describedby="emailHelp">

                            </div>

                            <label for="floatingInput">Photo</label>


                            <div class="col-12 mb-3">
                                <img src="<?php echo base_url(); ?>/img/<?= (old('foto_prestasi') ? old('foto_prestasi') : $joinprestasi[0]['foto_prestasi']); ?>" width="100">
                                <br>
                            </div>
                            <div>
                                <input type="hidden" name="oldfoto" value="<?= (old('foto_prestasi') ? old('foto_prestasi') : $joinprestasi[0]['foto_prestasi']); ?>">
                                <input class="form-control form-control-sm" value="<?= old('foto_prestasi') ?>" name="foto_prestasi" id="formFileSm" type="file">
                                <span>*ukuran foto 200px x 200px</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>