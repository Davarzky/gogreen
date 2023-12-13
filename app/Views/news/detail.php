<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
    
        <div class="col">
        <a href="/Pages/" class="backbutton">
        <img src="/img/corner-up-left.svg" alt="" style="height: 30px; width:30px; margin-top:10%; ">
        </a>
        
            <?php if ($berita): ?>
                <img src="<?= base_url('uploads/' . $berita['gambar']) ?>" class="card-img-top" alt="..." height="400px" width="200px">
                <h2 style="margin-left:30%;"><?= $berita['name']; ?></h2>
                <p><?= $berita['caption']; ?></p>
                <!-- Tambahkan detail lain sesuai kebutuhan -->
            <?php else: ?>
                <p>Berita tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>