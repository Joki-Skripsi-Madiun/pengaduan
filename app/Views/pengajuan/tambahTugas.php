<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Tugas</h1>
    </div>


    <form action="<?= base_url(); ?>/tambahTugas/saveTugas" method="post" enctype="multipart/form-data">

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No. Surat Tugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="no_tugas" placeholder="No. Surat">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="nama_tugas" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nip</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="nip_tugas" placeholder="Nip">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="jabatan_tugas" placeholder="Jabatan">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unit Kerja</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="unit_tugas" placeholder="Unit Kerja">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Isi Tugas</label>
            <div class="col-sm-10">
                <textarea type="text" name="isi_tugas" class="form-control form-control-sm" id="summernote3" placeholder="Isi"></textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Tugas</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-sm" name="tgl_tugas" placeholder="Tanggal Tugas">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Hari Tugas</label>
            <div class="col-sm-10">
                <select name="hari_tugas" class=" form-select">
                    <option selected value="Senin">Senin</option>
                    <option selected value="Selasa">Selasa</option>
                    <option selected value="Rabu">Rabu</option>
                    <option selected value="Kamis">Kamis</option>
                    <option selected value="Jum'at">Jum'at</option>
                    <option selected value="Sabtu">Sabtu</option>
                    <option selected value="Minggu">Minggu</option>
                    <option selected value="">Pilih...</option>
                </select>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jam Tugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="jam_tugas" placeholder="Jam Tugas">
            </div>
        </div>
        
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tempat Tugas</label>
            <div class="col-sm-10">
                <textarea type="text" name="tempat_tugas" class="form-control form-control-sm" id="summernote4" placeholder="Tempat Tugas">
                </textarea>
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