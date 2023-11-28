
<!-- Tabel Data Pengguna -->
<h2 class="my-3">Data Pengguna</h2>
<a href="<?= base_url('pengguna/create') ?>" class="btn btn-primary ms-1">Tambah Data Pengguna</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengguna as $user): ?>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?= base_url('pengguna/delete/'.$user['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pengguna ini?')"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
