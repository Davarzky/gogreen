<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGreen Technology</title>
    <link rel="website icon" type="png" href="/img/gogreen.png">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #1D6B02;
}

.container {
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.login {
    width: 400px;
}

form {
    width: 250px;
    margin: 60px auto;
}

h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

hr {
    border-top: 2px solid #1D6B02;
}

p {
    text-align: center;
    margin: 10px;
}

.right img {
    width: 450px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}

input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}
 .backbutton {
            position: relative;
            display: inline-block;
}
.backbutton img {
            width: 25px; 
            height: 25px;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #1D6B02;
}
.register{
        display: flex;
    }
.register-1{
    padding-top: 4%;
}
button:hover {
    background: white;
    color:#1D6B02 ;
}





@media (max-width: 880px) {
    .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 300px;
        margin: 20px auto;
    }

    .login {
        width: 400px;
        padding: 20px;
    }

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }
   
   
}
</style>
<body>

    <div class="container">
    <div class="backbutton">
        <a href="/Pages/" class="backbutton">
            <img src="/img/corner-up-left.svg" alt="">
        </a>
    </div>
        <div class="login">
            <form action="<?= site_url('/Pages/processLogin')?>" method="post">
                <h1>Login</h1>
                <hr>
                <p>GoGreen Technology</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com" name="email" class="form-control <?= session()->getFlashdata('email') ? 'is-invalid' : ''; ?>" value="<?= session()->getFlashdata('email') ? '' : old('email'); ?>">
                <?php if(isset(session()->getFlashdata('errors')['email'])) :?>

                <?= session()->getFlashdata('errors')['email']; ?>

                <?php endif ?>

                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password" id="password" class="form-control <?= session()->getFlashdata('password') ? 'is-invalid' : ''; ?>">
               

               

                <?php if(isset(session()->getFlashdata('errors')['password'])) :?>

                <?= session()->getFlashdata('errors')['password']; ?>

                <?php endif ?>

                <button>Login</button>
                <div class="register">
                    <p>Don't have an account?</p>
                     <a href="/Pages/register" class="register-1">Sign Up</a>
                </div>
               
            </form>
        </div>
        <div class="right">
            <img src="/img/pict-login.jpg" alt="">
        </div>
    </div>
</body>


</html>