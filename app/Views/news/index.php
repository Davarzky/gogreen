<?= $this->extend('template/template') ?>

<?= $this->section('content-side') ?>

<section class="section dashboard">

<main id="main" class="main">

<!-- Tabel Data Pengguna -->
<h2 class="my-3 ">News Data</h2>
<a href="<?= base_url('news/create') ?>" class="btn btn-primary ms-1 mb-3">Add News</a>



<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
       
        <?php 
            $i = 1;
            foreach ($gambar as $berita):
            ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><img src="<?= base_url('uploads/' . $berita['gambar']) ?>" class="card-img-top" alt="..."  style="width: 100px;"></td>
                <td><?= $berita['name'] ?></td>
                <td>
                    <a href="<?= base_url('news/edit/' .$berita['id'])?>" class="btn btn-success">
                    Edit
                    </a>
                    <a href="<?= base_url('news/delete/'.$berita['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengguna ini?')">
                    Delete
                    </a>

                </td>
            </tr>

        <?php $i++; endforeach; ?>
    </tbody>
</table>

</main>
</section>



<?= $this->endSection(); ?>
