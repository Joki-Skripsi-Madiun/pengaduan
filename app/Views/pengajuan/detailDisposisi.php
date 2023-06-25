<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Disposisi</h1>
        </div>
        <h4>Status : <?php if ($disposisi['status_disposisi'] == 1) { ?>
                <span class="badge bg-success">Disetujui</span>
            <?php } else { ?>
                <span class="badge bg-danger">Belum Disetujui</span>
            <?php } ?>
        </h4>
        </h4>
        <br><br>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Disposisi</label>
            <div class="col-sm-10">
                : <?= (old('jenis_disposisi')) ? old('jenis_disposisi') : $disposisi['jenis_disposisi']; ?>

            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No. Agenda</label>
            <div class="col-sm-10">
                : <?= (old('no_disposisi')) ? old('no_disposisi') : $disposisi['no_disposisi']; ?>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Penyelesaian</label>
            <div class="col-sm-10">
                : <?= (old('tgl1_disposisi')) ? old('tgl1_disposisi') : $disposisi['tgl1_disposisi']; ?>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Perihal Disposisi</label>
            <div class="col-sm-10">
                : <?= (old('perihal_disposisi')) ? old('perihal_disposisi') : $disposisi['perihal_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Agenda</label>
            <div class="col-sm-10">
                : <?= (old('tgl2_disposisi')) ? old('tgl2_disposisi') : $disposisi['tgl2_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Asal Disposisi</label>
            <div class="col-sm-10">
                : <?= (old('asal_disposisi')) ? old('asal_disposisi') : $disposisi['asal_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Intruksi/Informasi</label>
            <div class="col-sm-10">
                : <?= (old('informasi_disposisi')) ? old('informasi_disposisi') : $disposisi['informasi_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Catatan</label>
            <div class="col-sm-10">
                : <?= (old('catatan_disposisi')) ? old('catatan_disposisi') : $disposisi['catatan_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Dibuat</label>
            <div class="col-sm-10">
                : <?= (old('tglselesai_disposisi')) ? old('tglselesai_disposisi') : $disposisi['tglselesai_disposisi']; ?>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Diteruskan Kepada</label>
            <div class="col-sm-10">
                : <?= (old('terusan_disposisi')) ? old('terusan_disposisi') : $disposisi['terusan_disposisi']; ?>
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