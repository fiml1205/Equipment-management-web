<?php
include('../controller/LogsController.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/logs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="http://localhost/views/setAdmin.php" class="menu-item__link">
                            <i class="fa-solid fa-gear"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-75">
            <div class="wrap-75">
                <div class="heading">
                    <div class="heading-icon">
                        <i class="fa-solid fa-user icon-handle"></i>
                    </div>
                    <h3 class="heading-title">Welcome John</h3>
                </div>
                <div class="container-heading">
                    <h3 class="container-heading__text">Action Logs</h3>
                    <h3 style="font-size: 1.6rem; margin-top:24px;">Choose pages to show</h3>
                    <form action="" method="post" style="margin:18px 50px 0 10px;">
                        <select name="option" style="width: 60px;height:30px;">
                            <option value="">Page</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="7">7</option>
                            <option value="10">10</option>
                        </select>
                        <input type="submit" value="OK" name="btn-option" style="height:30px">
                    </form>
                    <form action="" method="POST">
                        <input type="text" class="container-heading__input" id="search" placeholder="search by name" name="txtsearch">
                        <button class="btn container-heading__search">Search</button>
                    </form>
                </div>

                <div class="container-table">
                    <table class="container-table__detail">
                        <thead>
                            <tr>
                                <th style="text-align: left;">Device ID #</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th class="table-foot">Date</th>
                            </tr>
                        </thead>
                        <tbody id="database">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['deviceid'] ?>
                                        </td>
                                        <td class="table-body">
                                            <?php echo $row['device'] ?>
                                        </td>
                                        <td class="table-body">
                                            <?php echo $row['action'] ?>
                                        </td>
                                        <td class="table-foot">
                                            <?php echo $row['date'] ?>
                                        </td>
                                    </tr>
                                    
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td class="table-foot"><?php echo ($total).' Devices'; ?></td>
                        </tfoot>
                    </table>
                </div>
                <div class="pagination-wrap">
                    <ul class="pagination">
                        <?php if ($currentPage - 1 > 0) { ?>
                            <button class="direction">
                                <a href="logs.php?page=<?php echo $currentPage - 1 ?>" style="height: 31px;padding-top: 7px">
                                    <i class="fa-solid fa-backward"></i>
                                </a>
                            </button>
                        <?php
                        } ?>

                        <?php for ($i = 1; $i <= $page; $i++) { ?>
                            <li class="<?php (($currentPage == $i) ? 'active' : '') ?> pagination-li"><a href="logs.php?page=<?php echo $i ?>">
                                    <?php echo $i ?>
                                </a></li>
                        <?php
                        }
                        ?>
                        <?php if ($currentPage + 1 <= $page) { ?>
                            <button class="direction">
                                <a href="logs.php?page=<?php echo $currentPage + 1 ?>" style="height: 31px;padding-top: 7px">
                                    <i class="fa-solid fa-forward"></i>
                                </a>
                            </button>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>