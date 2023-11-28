<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGreen Technology</title>
    <link rel="website icon" type="png" href="/img/gogreen.png">
    <style>
        body {
            margin: 0;
        }

        .all-login {
            height: 350px;
            width: 350px;
            box-shadow: 2px 2px 5px black;
            border-radius: 10px;
            margin: auto;
            margin-top: 10%;
        }

        .head-login {
            height: 60px;
            width: 350px;
            background-color: #1D6B02;
            border-radius: 10px;
        }

        .head-login h1 {
            text-align: center;
            padding-top: 10px;
            color: white;
            font-family: 'Open Sans';
        }

        h1 {
            margin: 0;
        }

        .input-login {
            margin-left: 20px;

        }

        #Username {
            height: 20px;
            width: 300px;
        }

        #Password {
            height: 20px;
            width: 300px;
            margin-left: 20px;
        }

        .Password-login label {
            margin-left: 20px;
        }

        #Email {
            height: 20px;
            width: 300px;
        }

        .foot-login {
            margin-top: -80px;
            margin-left: 46%;
        }

        .button-login {
            height: 30px;
            width: 100px;
            border-radius: 10px;
            background-color: #1D6B02;
            color: white;
            border: none;
        }

        .signin {
            display: flex;
            margin-left: -25px;
            margin-top: -15px;
        }

        .signin a {
            margin-top: 22px;
        }

        .backbutton {
            height: 35px;
            width: 100px;
            border-radius: 180px;
            color: white;
            background-color: #1D6B02;
        }
    </style>
</head>

<body>
    <a href="/Pages/"><button class="backbutton">BackButton</button></a>
    <div class="all-login">
        <div class="head-login">
            <h1>Selamat Datang</h1>
        </div>
        <div class="body-login">
            <div class="input-login">
                <div class="Username-login">
                    <form action="<?= site_url('/home')?>" method="post">
                        <label for="#">Username</label>
                        <br>
                        <input type="text" name="username" id="Username">
                </div>
                <br>
                <div class="email-login">
                    <label for="#">Email</label>
                    <br>
                    <input type="text" name="email" id="Email">
                </div>
            </div>
            <br>
            <div class="Password-login">
                <label for="#">Password</label>
                <br>
                <input type="text" name="password" id="Password">
            </div>
        </div>
    </div>
    <div class="foot-login">
        <a href="/Pages/login"><button class="button-login">Register</button></a>
        <div class="signin">
            <h6>Already have an account?</h6>
            <a href="/Pages/login">login</a>
        </div>
    </div>
    </div>
    </form>



</body>

</html>