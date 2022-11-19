<?php
require '../model/database/ConnectDb.php';
require '../model/database/Dashboard/EditDevice.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/editDevice.css">
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
                    <div class="heading-avatar" id="avatar">
                        <i class="fa-solid fa-user icon-handle"></i>
                    </div>
                    <h3 class="heading-title">Welcome John</h3>
                    
                    <!-- option account -->
                    <div class="option-account" id="optionAccount">
                        <ul class="option-account__ul">
                            <li class="option-account__li">
                                <a href="http://localhost/views/profileUser.php" class="option-account__link">
                                    <i class="fa-solid fa-address-card"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="option-account__li">
                                <a href="http://localhost/views/changePw.php" class="option-account__link">
                                    <i class="fa-solid fa-lock"></i>
                                    Change password
                                </a>
                            </li>
                            <li class="option-account__li">
                                <a href="" class="option-account__link">
                                    <i class="fa-solid fa-right-from-bracket"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="container-detail">
                    <?php
                    // take data device need edit from Db
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM devices WHERE deviceid = $id";
                    $result = mysqli_query($conn, $sql);
                    // in du lieu
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['deviceid'];
                        $device = $row['device'];
                        $mac = $row['mac'];
                        $ip = $row['ip'];
                        $date = $row['createdate'];
                        $power = $row['power'];
                    }
                    ?>
                    <form action="../model/database/Dashboard/EditDevice.php" class="form-edit" method="post">
                        <div class="form-edit__heading">Edit Device</div>
                        <table>
                            <tr>
                                <input type="text" name="deviceid" style="display: none;" value="<?php echo $id ?>">
                                <td class="table-body">Device name</td>
                                <td><input class="form-edit__input" type="text" name="device" value="<?php echo $device ?>"></td>
                            </tr>
                            <tr>
                                <td class="table-body">Mac Address</td>
                                <td><input class="form-edit__input" type="text" name="mac" value="<?php echo $mac ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="table-body">IP Address</td>
                                <td><input class="form-edit__input" type="text" name="ip" value="<?php echo $ip ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="table-body">Create Date</td>
                                <td><input class="form-edit__input" type="text" name="date" value="<?php echo $date ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="table-body">Power</td>
                                <td><input class="form-edit__input" type="text" name="power" value="<?php echo $power ?>"></td>
                            </tr>
                        </table>
                        <button name="btn-save" class="btn-primary btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- handle option-account -->
    <script src="/controller/BaseControl.js"></script>
</body>

</html>