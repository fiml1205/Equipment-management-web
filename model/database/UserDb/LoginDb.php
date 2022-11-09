<?php 
require '../ConnectDb.php';

// check Login
if(isset($_POST['btn-login'])) {  
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs) >0){
        ?>
            <script>
                window.location = 'http://localhost/views/dashboard.php'
            </script>
        <?php 
    }else{
        echo '<script>alert("Wrong username or password")</script>';
        ?>
            <script>
                window.location = 'http://localhost/views/formLogin.php'
            </script>
        <?php 
    }
}

