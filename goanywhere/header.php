<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c2bfff77db.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="common.css"/>
    <style>
        #map {
            display: none;
            z-index: 1;
        }
        .msg {
            color: darkslateblue;
        }
    </style>
</head>

<?php
    if(isset($_SESSION['userid'])) {
        echo "<script>
            $(document).ready(function () {
                $('#libtn').hide();
                $('#lobtn').show();
            });
        </script>";
    } else {
        echo "<script>
            $(document).ready(function () {
                $('#lobtn').hide();
                $('#libtn').show();
            });
        </script>";
    };
?>

<body>
    <div class="w-100 position-fixed" id="map"><img src="map.jpg" class="w-100"></div>
    <nav class="navbar navbar-expand-sm sticky-top justify-content-between pl-4 pr-4" id="navi">
        <a class="navbar-brand" href="index.php?redir=true">Go Anywhere</a>
        <ul class="navbar-nav">
            <!--<li class="nav-item pr-3">
                <form class="form-inline" action="/action_page.php">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search..">
                    </div>
                </form>
            </li>-->
            <li class="nav-item pr-3">
                <a id="libtn" class="nav-link" href=# onclick="$('#login').show()"><i class="far fa-user-circle"></i> Log in</a>
                <a id="lobtn" class="nav-link" href="include/logout.php"><i class="far fa-user-circle"></i> Log out</a>
            </li>
        </ul>
    </nav>

    <div id="login" class="modal">
        <form class="modal-content animate p-3" action="include/login.php" method="post">
            <span onclick="$('#login').hide()" class="close mt-2" title="Close Modal">&times;</span>
            <h4 class="text-center"><b>Welcome back</b></h4>
            <input type="text" class="w-100 p-2 mb-3" placeholder="Username or Email" name="mailname" required>
            <input type="password" class="w-100 p-2 mb-3" placeholder="Password" name="psw" required>
            <button type="submit" name="li-submit" class="btn btn-info w-100 mb-3">Login</button>
            <p class="text-center mb-1">New to Go Anywhere? <a href="register.php">Join Now</a></p>
        </form>
    </div>
</body>
</html>