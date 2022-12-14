<?php
include('../controller/DashboardController.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH BOARD</title>
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/responDashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <a href="http://localhost/views/setAdmin.php" class="menu-item__link">
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

                <!-- table -->
                <div class="container-table">
                    <table class="container-table__detail">
                        <thead>
                            <tr>
                                <th style="text-align: left;">Devices</th>
                                <th>MAC Address</th>
                                <th>IP</th>
                                <th>Create Date</th>
                                <th class="table-foot">Power Consumption (Kw/h)</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody id="database">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['device'] ?>
                                        </td>
                                        <td class="table-body">
                                            <?php echo $row['mac'] ?>
                                        </td>
                                        <td class="table-body">
                                            <?php echo $row['ip'] ?>
                                        </td>
                                        <td class="table-body">
                                            <?php echo $row['createdate'] ?>
                                        </td>
                                        <td class="table-foot">
                                            <?php echo $row['power'] ?>
                                        </td>
                                        <td class="table-option">
                                            <a href="../model/database/Dashboard/DeleteDevice.php?id=<?php echo $row['deviceid']; ?>" style="">
                                                <button onclick="return confirm('Do you really want to delete this device?')" class="btn-delete">Delete</button>
                                                <a>
                                                    <a href="/views/editDevice.php?id=<?php echo $row['deviceid']; ?>" style="margin-left: 10px;">
                                                        <button class="btn-edit">Edit</button>
                                                        <a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr style="background-color: #f1eeee;">
                                <td colspan="4">Total</td>
                                <td class="table-foot">
                                    <?php echo (array_reduce(($valuey), "sum")); ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- chart and form -->
                <div class="container-handle">
                    <div class="container-handle__chart">
                        <canvas id="myChart" class="chart-handle"></canvas>
                    </div>

                    <div class="container-handle__form">
                        <form action="../model/database/Dashboard/AddDevice.php" method="post">
                            <input type="text" class="take-data" placeholder="name" name="namedevice">
                            <br>
                            <input type="text" class="take-data" placeholder="IP" name="ip">
                            <br>
                            <h3 class="notice-validate"></h3>
                            <br>
                            <button class="btn btn-device" name="btn-submit">ADD DEVICE</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- icon show menu responsive-->
            <div class="menu-responsive__show">
                <i class="fa-solid fa-bars"></i>
            </div>
            <!-- menu responsive -->
            <div class="menu-responsive">
                <div class="heading-reponsive">
                    <div class="heading-icon">
                        <i class="fa-solid fa-user icon-handle"></i>
                    </div>
                    <h3 class="heading-title">Welcome John</h3>
                </div>

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
                            <a href="http://localhost/views/setAdmin.php" class="menu-item__link">
                                <i class="fa-solid fa-gear"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- add chart -->
    <script>
        var xValues = <?php echo json_encode($valuex); ?>;
        var yValues = <?php echo json_encode($valuey); ?>;
        // add color for device in chart      
        var barColors = [
            "#b91d47", "#333",
            "#00aba9", "#21d358",
            "#2b5797", "yellow",
            "#e8c3b9", "pink"
        ];
        // create chart
        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Power Consumption (Kw/h)"
                },
                aspectRatio: 1
            }
        });
    </script>

    <!-- handle responsive -->
    <script>
        var listenShow = document.querySelector('.menu-responsive__show')
        var showResponsive = document.querySelector('.menu-responsive')

        listenShow.onclick = function() {
            showResponsive.style.display = 'block'
        }

        var listenClose = document.querySelector('.container')
        listenClose.onclick = function() {
            showResponsive.style.display = 'none'
        }
    </script>

    <!-- handle option-account -->
    <script src="/controller/BaseControl.js"></script>
</body>

</html>