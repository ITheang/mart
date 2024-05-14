<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'Admin/root/Header.php'; ?>
</head>
<style>
    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: black;
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #bdb8b8;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #F70BD4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #F70BD4,
            0 0 25px #F939DC,
            0 0 50px #FE54E5,
            0 0 100px #FB7AE8;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(1) {
        bottom: 2px;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #FB7AE8);
        animation: btn-anim1 2s linear infinite;
    }
</style>

<body class="bg-gray-200">
    <div class="container p-52 bg-center">

        <div class="row mt-5">
            <div class="login-box">
                <form>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="text-pink-600">Welcome back to Pink Mart</h1>
                            <p class="text-pink-300">Enter your credentail to login</p>
                        </div>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="">
                        <label>Password</label>
                    </div>
                    <center>
                        <a href="Admin/index.php">
                            Login
                            <span></span>
                        </a>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>