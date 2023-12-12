<?= $this->extend('template/template') ?>

<?= $this->section('content-side') ?>

<section class="section dashboard">

<main id="main" class="main">

<div class="container">
    <h2 class="my-3">Form Edit News</h2>

    <form action="<?= site_url('news/edit/'. $news['id']) ?>" method="post" enctype="multipart/form-data">

    <div class="form-group row">
    <label for="gambar" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" id="gambar" name="gambar">
        <img src="<?= base_url('uploads/' . $news['gambar']) ?>" class="card-img-top" alt="..."  style="width: 100px;">
    </div>
</div>


        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?=$news['name'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="caption" class="col-sm-2 col-form-label">Caption</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="caption" name="caption" value="<?=$news['caption'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit News</button>
            </div>
        </div>
    </form>
    </main>
</section>
<?= $this->endSection(); ?>