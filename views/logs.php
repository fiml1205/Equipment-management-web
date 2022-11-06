<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/logs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body onload="getData()">
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
            <div class="heading">
                <div class="heading-icon">
                    <i class="fa-solid fa-user icon-handle"></i>
                </div>
                <h3 class="heading-title">Welcome John</h3>
            </div>

            <div class="container">
                <div class="container-heading">
                    <h3 class="container-heading__text">Action Logs</h3>
                    <input type="text" class="container-heading__input" id="search" oninput="searchData()" placeholder="search by name">
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

                        </tbody>
                        <tfoot>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td class="table-foot">255</td>
                        </tfoot>
                    </table>
                </div>
            </div>
            <ul id="pagination" class="test"></ul>
        </div>
        
    </div>
    <script src="/controllers/logs.js"></script>
</body>
</html>