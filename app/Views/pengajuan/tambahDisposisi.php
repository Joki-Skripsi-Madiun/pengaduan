<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Disposisi</h1>
    </div>


    <form action="<?= base_url(); ?>/tambahDisposisi/saveDisposisi" method="post" enctype="multipart/form-data">

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Disposisi</label>
            <div class="col-sm-10">
               <select name="jenis_disposisi" class=" form-select">
                    <option selected value="PENTING">PENTING</option>
                    <option selected value="RAHASIA">RAHASIA</option>
                    <option selected value="RUTIN">RUTIN</option>
                    <option selected value="">Pilih...</option>
                </select>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No. Agenda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="no_disposisi" placeholder="No. Agenda">
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Penyelesaian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-sm" name="tgl1_disposisi" placeholder="Tanggal Penyelesaian">
            </div>
        </div>

        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Perihal Disposisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="perihal_disposisi" placeholder="Perihal Disposisi">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Agenda</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-sm" name="tgl2_disposisi" placeholder="Tanggal Agenda">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Asal Disposisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" name="asal_disposisi" placeholder="Asal Disposisi">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Intruksi/Informasi</label>
            <div class="col-sm-10">
                <textarea type="text" name="informasi_disposisi" class="form-control form-control-sm" id="summernote3" placeholder="Intruksi/Informasi"></textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Catatan</label>
            <div class="col-sm-10">
                <textarea type="text" name="catatan_disposisi" class="form-control form-control-sm" id="summernote4" placeholder="Catatan">
                </textarea>
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Dibuat</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-sm" name="tglselesai_disposisi" placeholder="Tanggal Dibuat">
            </div>
        </div>
        <div class="form-group row pb-2">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Diteruskan Kepada</label>
            <div class="col-sm-10">
                <textarea type="text" name="terusan_disposisi" class="form-control form-control-sm" id="summernote" placeholder="Diteruskan Kepada"></textarea>
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