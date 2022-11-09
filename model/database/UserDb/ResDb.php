<?php
require '../ConnectDb.php';

// add new user to DB
if (isset($_POST['btn-res'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $sql = "INSERT INTO `users` (`username`,`password`) 
        VALUES('$username', '$password')";

        if ($conn->query($sql) === true) {
?>
<script>
    window.location = 'http://localhost/views/formLogin.php'
</script>
<?php
        } else {
            echo "loi {$sql}" . $conn->error;
        }
    } else {
        echo '<script>alert("username or password is empty")</script>';
?>
<script>
    window.location = 'http://localhost/views/formRes.php'
</script>
<?php
    }
}