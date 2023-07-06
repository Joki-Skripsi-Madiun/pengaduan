<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Pengantar</h1>
    </div>


    <form action="<?= base_url(); ?>/tambahPengantar/save" method="post" enctype="multipart/form-data">

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="no_pengantar" placeholder="No Surat">
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tujuan Surat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control form-control-sm" name="tujuan_pengantar" id="summernote2" placeholder="Tujuan Surat"></textarea>
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Isi Pengantar</label>
            <div class="col-sm-10">
                <textarea type="text" name="isi_pengantar" class="form-control form-control-sm" id="summernote3" placeholder="Isi Pengantar"></textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Banyaknya</label>
            <div class="col-sm-10">
                <textarea type="text" name="banyak_pengantar" class="form-control form-control-sm" id="summernote4" placeholder="Banyaknya">
                </textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Keterangan</label>
            <div class="col-sm-10">
                <textarea type="text" name="keterangan_pengantar" class="form-control form-control-sm" id="summernote" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unit</label>
            <div class="col-sm-10">
                <input type="text" name="unit_pengantar" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Unit">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Penerima</label>
            <div class="col-sm-10">
                <textarea type="text" name="penerima_pengantar" class="form-control form-control-sm" id="summernote1" placeholder="Penerima"></textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" name="tgl_pengantar" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama_pengantar" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIP</label>
            <div class="col-sm-10">
                <input type="text" name="nip_pengantar" class="form-control form-control-sm" id="colFormLabelSm" placeholder="NIP">
            </div>
        </div>


        <br>

        <button class="col-2 btn btn-lg btn-primary" type="submit">Tambah</button>

    </form>





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
            ['view', [ 'codeview', 'help']]
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
            ['view', [ 'codeview', 'help']]
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
            ['view', [ 'codeview', 'help']]
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
            ['view', [ 'codeview', 'help']]
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
            ['view', [ 'codeview', 'help']]
        ]
    });
     
</script>

<?= $this->endSection(); ?>