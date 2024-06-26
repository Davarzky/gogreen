<?= $this->extend('template/template') ?>

<?= $this->section('content-side') ?>

<section class="section dashboard">

<main id="main" class="main">

<!-- Tabel Data Pengguna -->
<h2 class="my-3">Users Data</h2>
<a href="<?= base_url('pengguna/create') ?>" class="btn btn-primary ms-1">Add Users data</a>

<form action="<?= base_url('userController/index') ?>" method="post">
    <div class="input-group mb-3 mt-3">
        <input type="text" class="form-control" placeholder="Masukkan kata pencarian..." name="keyword">
        <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
       
        <?php 
            $i = 1 + (6 * ($pengguna['currentPage'] - 1));
            foreach ($pengguna['users'] as $user):
            ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['level'] ?></td>
                <td>
                    <a href="<?= base_url('pengguna/edit/' .$user['id'])?>" class="btn btn-success">
                    Edit
                    </a>
                    <a href="<?= base_url('pengguna/delete/'.$user['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengguna ini?')">
                    Delete
                    </a>

                </td>
            </tr>

        <?php $i++; endforeach; ?>
    </tbody>
</table>
    <?= $pengguna['pager']->links('users','users_pagination'); ?>
</main>
</section>



<?= $this->endSection(); ?>
