<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if ($berita): ?>
                <img src="<?= base_url('uploads/' . $berita['gambar']) ?>" class="card-img-top" alt="..." height="100px" width="100px">
                <h2><?= $berita['name']; ?></h2>
                <p><?= $berita['caption']; ?></p>
                <!-- Tambahkan detail lain sesuai kebutuhan -->
            <?php else: ?>
                <p>Berita tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>