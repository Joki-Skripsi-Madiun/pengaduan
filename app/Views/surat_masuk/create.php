<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<div class="container-fluid">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Surat Masuk</h1>
        </div>

        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h5>Periksa Entrian Form</h5>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form action="<?= base_url(); ?>/surat-masuk/save" method="post" enctype="multipart/form-data">

            <div class="form-group row pb-2">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Surat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" name="nama_surat" placeholder="Nama Surat">
                </div>
            </div>
            <div class="form-group row pb-2">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Asal Surat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" name="asal_surat" placeholder="Asal Surat">
                </div>
            </div>
            <div class="form-group row pb-2">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Surat</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="id_jenis" aria-label=".form-select-sm example">
                        <option selected>Pilih . . .</option>
                        <?php foreach ($jenis as $j) : ?>
                            <option value="<?= $j['id_jenis']; ?>"><?= $j['nama_jenis']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row pb-2">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Upload Surat</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <input class="form-control form-control-sm" name="file_surat" id="formFileSm" type="file">
                    </div>
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