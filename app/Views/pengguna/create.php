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
                background-color:#1D6B02 ;
                color: white;
                border-radius: 180px    ;
            }

        </style>
       <!-- Formulir Tambah Data Pengguna -->
       <div class="container">
    <h2 class="my-3">Form Tambah Data Pengguna</h2>

    <form action="<?= site_url('pengguna/save') ?>" method="post">
        <!-- Formulir Tambah Data Pengguna -->
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
