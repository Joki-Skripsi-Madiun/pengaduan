<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Pengantar</h1>
        </div>
        <h4>Status : <?php if ($pengantar['status_pengantar'] == 1) { ?>
                <span class="badge bg-success">Disetujui</span>
            <?php } else { ?>
                <span class="badge bg-danger">Belum Disetujui</span>
            <?php } ?>
        </h4>
        <br><br>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Surat</label>
            <div class="col-sm-10">
                : <?= (old('no_pengantar')) ? old('no_pengantar') : $pengantar['no_pengantar']; ?>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tujuan Surat</label>
            <div class="col-sm-9">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <?= (old('tujuan_pengantar')) ? old('tujuan_pengantar') : $pengantar['tujuan_pengantar']; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Isi Pengantar</label>
            <div class="col-sm-10">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <?= (old('isi_pengantar')) ? old('isi_pengantar') : $pengantar['isi_pengantar']; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Banyaknya</label>
            <div class="col-sm-10">
                : <?= (old('banyak_pengantar')) ? old('banyak_pengantar') : $pengantar['banyak_pengantar']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Keterangan</label>
            <div class="col-sm-10">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <?= (old('keterangan_pengantar')) ? old('keterangan_pengantar') : $pengantar['keterangan_pengantar']; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unit</label>
            <div class="col-sm-10">
                : <?= (old('unit_pengantar')) ? old('unit_pengantar') : $pengantar['unit_pengantar']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Penerima</label>
            <div class="col-sm-10">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <?= (old('penerima_pengantar')) ? old('penerima_pengantar') : $pengantar['penerima_pengantar']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal</label>
            <div class="col-sm-10">
                : <?= (old('tgl_pengantar')) ? old('tgl_pengantar') : $pengantar['tgl_pengantar']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <div class="col-sm-10">
                : <?= (old('nama_pengantar')) ? old('nama_pengantar') : $pengantar['nama_pengantar']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIP</label>
            <div class="col-sm-10">
                : <?= (old('nip_pengantar')) ? old('nip_pengantar') : $pengantar['nip_pengantar']; ?>
            </div>
        </div>


        <br>

        <button class="col-2 btn btn-lg btn-primary" type="submit">Kembali</button>

        <br>





    </main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['codeview', 'help']]
        ]
    });
    $('#summernote1').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['codeview', 'help']]
        ]
    });
    $('#summernote2').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['codeview', 'help']]
        ]
    });
    $('#summernote3').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['codeview', 'help']]
        ]
    });
    $('#summernote4').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['codeview', 'help']]
        ]
    });
</script>

<?= $this->endSection(); ?>