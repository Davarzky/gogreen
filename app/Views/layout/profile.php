
<style>
    .container{
        box-shadow: -1px 0px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: -1px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 0px 5px 0px rgba(0,0,0,0.75);
    height: 40%;
    width: 50%;
    margin: auto;
    margin-top: 15%;
}
                      h2{
                        color: #1D6B02;
                        margin-left: 35%;
                        font-size: 30px;
                    }
                    label{
                        font-size: 20px;
                        margin-left: 10px;
                    }
                    #name{
                        height: 35px;
                        width: 70vh;
                    }
                    #email{
                        margin-left: 10px;
                        height: 35px;
                        width: 95vh;
                    }
                    #password{
                        margin-left: 10px;
                        height: 35px;
                        width: 95vh;
                    }
                    #username{
                      margin-left: 10px;
                        height: 35px;
                        width: 95vh;
                    }
                    button{
                        height: 30px;
                        margin-top: 2%;
                        background-color: #1D6B02 ;
                        color: white;
                        margin-left: 80%;
                    }

</style>
<?php if (session()->has('errors')) : ?>
    <div class="alert alert-danger">
        <?= implode('<br>', session('errors')) ?>
    </div>
<?php endif; ?>

    
<div class="container">
            <div class="all-include">
            <?php if(isset($user)): ?>
                <h2 class="card-title">Profile Details</h2>
                <form action="/UserController/updateProfile" method="post">
                <div class="row mb-3">
                  <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="username" type="text" class="form-control" id="username"value="<?= $user['username'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="text" class="form-control" id="email"value="<?= $user['email'] ?>">
                  </div>
                </div>
            </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
  
            <?php else: ?>
                <p>User not found.</p>
            <?php endif; ?>
                </form>
               
            </div>
            </div>



             