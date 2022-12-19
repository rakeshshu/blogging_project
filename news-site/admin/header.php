<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/skynews.jpg"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-6  col-md-4">
                        <a href="logout.php" class="admin-logout">Hello <?php echo $_SESSION["username"]; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="logout.php" class="btn btn-danger btn-md">logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                           <li> <a href="post.php">Home &nbsp;<img src="images/home2.png" height="25px" width="25px"></a>
                        </li>
                            <li>
                                <a href="post.php">Post &nbsp;<img src="images/post.png" calss="img-thumbnail" height="20px" width="20px"></a>
                            </li>
                            <?php
                              if($_SESSION["user_role"] == '1'){
                            ?>
                            <li>
                                <a href="category.php">Category &nbsp;<img src="images/category.png" calss="img-thumbnail" height="20px" width="20px"></a>
                            </li>
                            <li>
                                <a href="users.php">Users &nbsp;<img src="images/adduser.png" calss="img-thumbnail" height="20px" width="20px"></a>
                            </li>
                            <li>
                                <a href="settings.php">Settings &nbsp;<img src="images/setting.png" calss="img-thumbnail" height="20px" width="20px"></a>
                            </li>
                            <?php
                              }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
