<?php
require_once("../db/db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <link rel='stylesheet' type='text/css' media='screen' href='../hf/css/style.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <style>
        label.error {
            color: red;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <!--header section-->
    <div class="main">
        <header class="h">
            <div class="title">
                <a href=""> Basic 90</a>
                <p>Free HTML5 Website Template</p>
            </div>
            <div class="search">
                <form action="">
                    <input type="text" placeholder="Search Our Website">
                    <input type="submit" name="submit" id="submit" value="submit">
                </form>
            </div>
            <nav class="nav">
                <ul>
                    <li id="adsh"><a href="../admin/index.php">DASHBOARD</a></li>
                    <li id="dep"><a href="../admin/department.php"> DEPARTMENT </a></li>
                    <li class="cate"><a href="../admin/category.php">CATEGORY</a></li>
                    <li class="cate"><a href="../admin/gallery.php">GALLERY</a></li>
                    <li><a href="#">TEXT LINK</a></li>
                    <li><a href="#">TEXT LINK</a></li>
                    <li><a href="#">TEXT LINK</a></li>

                    <?php if (isset($_SESSION['role'])) { ?>
                    <?php
                    } elseif (isset($_SESSION['urole'])) { ?>
                    <?php
                    } else { ?>
                        <li class="regb"><a href="../register/index.php">REGISTER </a></li>
                        <li class="legb"><a href="../login/index.php"> LOGIN </a></li>
                    <?php } ?>
                </ul>
                <?php
                if (isset($_SESSION['aid']) && isset($_SESSION['role']) && isset($_SESSION['email'])) {
                    ?>
                    <a href="../admin/logout.php" onclick="return confirm('are you sure you want to logout')"
                        class="btn btn-danger m"> Logout</a>
                <?php
                }
                if (isset($_SESSION['uid']) && isset($_SESSION['urole']) && isset($_SESSION['uemail'])) {
                    ?>
                    <a href="../user/logout.php" onclick="return confirm('are you sure you want to logout')"
                        class="btn btn-warning m"> Logout</a>
                <?php
                }
                ?>
            </nav>
        </header>
    </div>