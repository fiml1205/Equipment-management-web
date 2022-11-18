<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/formAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<title>Document</title>
</head>

<body>
    <div class="wrap">
        <div class="col-25">
            <div class="menu-title">
                <div class="menu-title__icon">
                    <i class="fa-solid fa-laptop icon"></i>
                </div>
                <h3 class="menu-title__heading">Device management</h3>
            </div>
            <p class="solid"></p>
            <nav class="menu-detail">
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="http://localhost/views/dashboard.php" class="menu-item__link">
                            <i class="fa-solid fa-table-columns"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/views/logs.php" class="menu-item__link">
                            <i class="fa-solid fa-clock"></i>
                            Logs
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item__link">
                            <i class="fa-solid fa-gear"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-75">
            <div class="container">
                <div class="heading">
                    <div class="heading-icon">
                        <i class="fa-solid fa-user icon-handle"></i>
                    </div>
                    <h3 class="heading-title">Welcome John</h3>
                </div>
                <div class="container-detail">
                    <form action="" class="form-admin" method="post" enctype="multipart/form-data">
                        <h1 class="form-admin__heading">Admin System</h1>
                        <input type="password" placeholder="current password" class="auth-form__input">
                        <br>
                        <input type="password" placeholder="new password" class="auth-form__input">
                        <br>
                        <h1 class="notice-file">Upload Avatar</h1>
                        <input type="file" class="btn-file" id="" name="file">

                        <br>
                        <input type="submit" name="" id="" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>