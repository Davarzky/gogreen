<?= $this->extend('template/template') ?>

<?= $this->section('content-side') ?>

<section class="section dashboard">

<main id="main" class="main">
<h2 class="my-3">Data Contact</h2>
<a href="<?= base_url('contact/create') ?>" class="btn btn-primary ms-1">Add Contact data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
       
        <?php 
            $i = 1;
            foreach ($contact as $contc):
            ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $contc['name'] ?></td>
                <td><?= $contc['email'] ?></td>
                <td><?= $contc['subject'] ?></td>
                <td>
                    <a href="<?= base_url('contact/edit/' .$contc['id'])?>" class="btn btn-success">
                        Edit
                    </a>
                    <a href="<?= base_url('contact/delete/'.$contc['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengguna ini?')">
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


