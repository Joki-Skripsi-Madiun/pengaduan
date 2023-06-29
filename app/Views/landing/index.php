<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Ubah Halaman Landing</h5>
        <div class="card">
          <div class="card-body">
            <form action="<?= base_url(); ?>/landing/update" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="exampleInput" class="form-label">Judul Setting</label>
                <input type="text" class="form-control" id="exampleInput" aria-describedby="text" name="judul_setting" value="<?= (old('judul_setting') ? old('judul_setting') : $landing['judul_setting']); ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputKeterangan1" class="form-label">Keterangan</label>
                <input type="text" class="form-control" value="<?= (old('keterangan_setting') ? old('keterangan_setting') : $landing['keterangan_setting']); ?>" name="keterangan_setting" id="exampleInputKeterangan1">
              </div>
              <div class="mb-3">
                <label for="exampleInputKeterangan1" class="form-label">Alamat Sekolah</label>
                <input type="text" class="form-control" name="alamat_sekolah" id="exampleInputKeterangan1" value="<?= (old('alamat_sekolah') ? old('alamat_sekolah') : $landing['alamat_sekolah']); ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputKeterangan1" class="form-label">Telepon Sekolah</label>
                <input type="text" class="form-control" name="tlp_sekolah" id="exampleInputKeterangan1" value="<?= (old('tlp_sekolah') ? old('tlp_sekolah') : $landing['tlp_sekolah']); ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputKeterangan1" class="form-label">Website Sekolah</label>
                <input type="text" class="form-control" name="website_sekolah" id="exampleInputKeterangan1" value="<?= (old('website_sekolah') ? old('website_sekolah') : $landing['website_sekolah']); ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputKeterangan1" class="form-label">Bobot Pelanggaran</label>
                <input type="text" class="form-control" name="kkm_bobot" id="exampleInputKeterangan1" value="<?= (old('kkm_bobot') ? old('kkm_bobot') : $landing['kkm_bobot']); ?>">
              </div>

              <label for="floatingInput">Photo</label>


              <div class="col-12 mb-3">
                <img src="<?php echo base_url(); ?>/img/<?= (old('logo') ? old('logo') : $landing['logo']); ?>" width="100">
                <br>
              </div>
              <div>
                <input type="hidden" name="oldfoto" value="<?= (old('logo') ? old('logo') : $landing['logo']); ?>">
                <input class="form-control form-control-sm" value="<?= old('logo') ?>" name="logo" id="formFileSm" type="file">
                <span>*ukuran foto 200px x 200px</span>
              </div>

              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>