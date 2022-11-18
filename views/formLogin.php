<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to SOIOT SYSTEM</title>
    <link rel="stylesheet" href="/assets/css/formLogin.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="auth-form">
        <div class="auth-form__container">
            <div class="auth-form__header">
                <h3 class="auth-form__heading">SOIOT SYSTEM</h3>
            </div>
            <div class="auth-form__form">
                <form action="../model/database/UserDb/LoginDb.php" method="POST">
                    <input type="text" class="auth-form__input" placeholder="email/phone number/user name" name="username">
                    <input type="password" class="auth-form__input" placeholder="password" name="password">
                    <div class="notice"></div>
                    <button class="btn btn-primary" name="btn-login">LOGIN</button>
                </form>
            </div>
        </div>
        <div class="auth-form__option">
            <h3 class="forgot-password">forgot password?</h3>
            <h3 class="login-sms">login with sms</h3>
        </div>
        <div class="auth-form__social">
            <a href="" class="btn btn-icon btn-fb">
                <i class="fab fa-facebook space"></i>
                Login with Facebook
            </a>
            <a href="" class="btn btn-icon btn-gg">
                <img src="/assets/imgs/download.png" alt="" class="gg-logo">
                Login with Google
            </a>
        </div>
        <div class="auth-form__register">
            <h3 class="introduction">
                you don't have an account?
            </h3>
            <h3 class="register">
                <a href="http://localhost/views/formRes.php">Register</a>
            </h3>
        </div>
    </div>
</body>

</html>