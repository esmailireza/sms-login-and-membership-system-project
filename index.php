<?php
require_once("./config/database.php");
require_once("./action/sign-in.php");
?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email to registration</span>
                <input type="text" placeholder="userName" name="username">
                <input type="email" placeholder="Email" name="email">
                <input type="text" placeholder="MObileNumber" name="mobile">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1>Sign In</h1>
                <br>
                <span>or use your email/password</span>
                <input type="text" name="key" placeholder="Mobile / Username / Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forget your Password?</a>
                <div style="display: inline;">
                    <button type="submit" name="signin">Sign In</button>
                    <a style="margin-left: 15px" href="otp.php">Send OTP</a>
                </div>
                <?php
                if (isset($_GET["notuser"])) { ?>
                    <p style="width: 100%" class="alert alert-danger">user not found!</p>
                <?php } elseif (isset($_GET["loginned"])) { ?>
                    <p style="width: 100%" class="alert alert-success">logined to website</p>
                <?php } ?>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your Personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your Personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./assets/script/js/script.js"></script>

</html>