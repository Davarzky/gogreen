<?=$this->extend('template/template') ?>

<?= $this->section('content-side') ?>

<section class="section dashboard">

<main id="main" class="main">
<style>
            h2{
                font-size: 30px;
            }
            label{
                font-size: 20px;
            }
            #username{
                height: 35px;
                width: 70vh;
            }
            #email{
                height: 35px;
                width: 70vh;
            }
            #password{
                height: 35px;
                width: 70vh;
            }
            button{
                height: 30px;
                margin-top: 2%;
                background-color: cadetblue ;
                color: white;
            }

        </style>

       <!-- Formulir Tambah Data Pengguna -->
       <div class="container">
    <h2 class="my-3">Form Edit Data Pengguna</h2>

    <form action="<?=site_url('pengguna/edit/'.$data['id'])?>" method="post">
        <!-- Formulir Tambah Data Pengguna -->
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="<?=$data['username'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?=$data['email']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" value="<?=$data['password'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
                <select name="level" id="level">
                    <option value="admin" <?=$data['level']=='admin'?'selected':'' ?>>admin</option>
                    <option value="writer" <?=$data['level']=='writer'?'selected':'' ?>>writer</option>
                    <option value="admin" <?=$data['level']=='users'?'selected':'' ?>>users</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
    </main>
    </section>
    <?= $this->endSection(); ?>
