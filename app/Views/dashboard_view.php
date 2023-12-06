<!-- Tabel Data Pengguna -->
<h2 class="my-3">Users Data</h2>
<a href="<?= base_url('pengguna/create') ?>" class="btn btn-primary ms-1">Add Users data</a>

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
            $i = 1;
            foreach ($pengguna as $user):
            ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['level'] ?></td>
                <td>
                    <a href="<?= base_url('pengguna/edit/' .$user['id'])?>" class="btn btn-success">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url('pengguna/delete/'.$user['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengguna ini?')">
                        <i class="fa fa-trash"></i>
                    </a>

                </td>
            </tr>

        <?php $i++; endforeach; ?>
    </tbody>
</table>

