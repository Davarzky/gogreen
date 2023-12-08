<?= $this->extend('template/template') ?>

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
            #name{
                height: 35px;
                width: 70vh;
            }
            #email{
                height: 35px;
                width: 70vh;
            }
            #subject{
                height: 35px;
                width: 70vh;
            }
            #message{
                height: 100px;
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
    <h2 class="my-3">Form Tambah Contact</h2>

    <form action="<?= site_url('contact/save') ?>" method="post">
        <!-- Formulir Tambah Data Pengguna -->
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea name="message" id="message" cols="100" rows="50"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
    </main>
</section>
<?= $this->endSection(); ?>