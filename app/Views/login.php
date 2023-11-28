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
            margin-top: 15%;
            margin-left: 20px;

        }

        #Username {
            height: 30px;
            width: 300px;
        }

        #Password {
            height: 30px;
            width: 300px;
        }

        .foot-login {
            margin-top: 30px;
            margin-left: 35%;
        }

        .button-login {
            height: 30px;
            width: 100px;
            border-radius: 10px;
            background-color: #1D6B02;
            color: white;
            border: none;
        }

        .signup {
            display: flex;
            margin-top: -10px;
            margin-left: -25px;
        }

        .signup a {
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
            <form action="/Pages/">
                <div class="input-login">
                    <div class="Username-login">
                        <label for="Username">Username</label>
                        <br>
                        <input type="text" name="Username" id="Username">
                    </div>
                    <br>
                    <div class="Password-login">
                        <label for="Password">Password</label>
                        <br>
                        <input type="password" name="Password" id="Password">
                    </div>
                </div>
        </div>
        <div class="foot-login">
            <a href="/Pages/"><button class="button-login" type="submit">Login</button></a>
            <div class="signup">
                <h6>Don't have an account?</h6>
                <a href="/Pages/register">Sign up</a>
            </div>

            </form>
        </div>
    </div>
</body>

</html>