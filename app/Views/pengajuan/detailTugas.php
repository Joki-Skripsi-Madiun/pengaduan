<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Tugas</h1>
        </div>
        <h4>Status : <?php if ($tugas['status_tugas'] == 1) { ?>
                <span class="badge bg-success">Disetujui</span>
            <?php } else { ?>
                <span class="badge bg-danger">Belum Disetujui</span>
            <?php } ?>
        </h4>
        </h4>
        <br><br>



        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No. Surat Tugas</label>
            <div class="col-sm-10">
                : <?= (old('no_tugas')) ? old('no_tugas') : $tugas['no_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <div class="col-sm-10">
                : <?= (old('nama_tugas')) ? old('nama_tugas') : $tugas['nama_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nip</label>
            <div class="col-sm-10">
                : <?= (old('nip_tugas')) ? old('nip_tugas') : $tugas['nip_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jabatan</label>
            <div class="col-sm-10">
                : <?= (old('jabatan_tugas')) ? old('jabatan_tugas') : $tugas['jabatan_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unit Kerja</label>
            <div class="col-sm-10">
                : <?= (old('unit_tugas')) ? old('unit_tugas') : $tugas['unit_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Isi Tugas</label>
            <div class="col-sm-10">
                : <?= (old('isi_tugas')) ? old('isi_tugas') : $tugas['isi_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Tugas</label>
            <div class="col-sm-10">
                : <?= (old('tgl_tugas')) ? old('tgl_tugas') : $tugas['tgl_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Hari Tugas</label>
            <div class="col-sm-10">
                : <?= (old('hari_tugas')) ? old('hari_tugas') : $tugas['hari_tugas']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jam Tugas</label>
            <div class="col-sm-10">
                : <?= (old('jam_tugas')) ? old('jam_tugas') : $tugas['jam_tugas']; ?>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tempat Tugas</label>
            <div class="col-sm-10">
                : <?= (old('tempat_tugas')) ? old('tempat_tugas') : $tugas['tempat_tugas']; ?>
            </div>
        </div>
        <br>

        <button class="col-2 btn btn-lg btn-primary" type="submit">Kembali</button>






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