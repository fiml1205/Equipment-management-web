<?php 
require '../ConnectDb.php';

$date = date('Y/m/d');
$mac = rand(0, 100);
$power = rand(0, 100);

if(isset($_POST['btn-submit'])) {  
    $namedevice = $_POST['namedevice'];
    $ip = $_POST['ip'];

    if(!empty($namedevice)&&!empty($ip)){
        $sql = "INSERT INTO `devices` (`device`,`mac`, `ip`, `createdate`, `power`) 
        VALUES('$namedevice','$mac', '$ip', '$date', '$power')";

        if($conn->query($sql)===true){
            ?>
            <script>
                window.location = 'http://localhost/views/dashboard.php'
            </script>
            <?php 
        }else{
            echo "loi {$sql}".$conn->error;
        }
    }else{
        echo'thieu thong tin';
    }
}