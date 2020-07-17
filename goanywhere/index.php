<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <title>homepage</title>

    <style>
        body {
            font-family: Corbel, sans-serif;
            background-color: #ededed;
        }
        #welcome {
            font-size: 20px;
            border-left: lightsteelblue solid 5px;
        }
        .wlc {
            font-family: "Lucida Handwriting";
            font-weight: bold;
            color: darkslateblue;
        }
    </style>
</head>

<?php
if (!(isset($_GET['err']) or isset($_GET['login']) or isset($_GET['redir']) or isset($_GET['logout']))) {
    echo "<script>
                $(document).ready(function () {
                    if ($(window).width() >= 992) {
                        $(\"#map\").show();
                        $(\"nav, .container\").hide();
                        setTimeout(function () {
                            $(\"nav, .container\").fadeIn(2000);
                            $(\"#map\").fadeOut(2000);
                        }, 500);
                    }
                });
            </script>";
} elseif (isset($_GET['login'])) {
    echo "<h2 class=\"msg text-center mt-5\"> You are logged in! </h2>
                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            $('.msg').hide();
                        }, 2000);
                    });
                </script>";
} elseif (isset($_GET['logout'])) {
    echo "<h2 class=\"msg text-center mt-5\"> You are logged out! </h2>
                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            $('.msg').hide();
                        }, 2000);
                    });
                </script>";
} elseif (isset($_GET['err'])) {
    echo "<h3 class=\"msg text-center mt-5\"> Invalid username or password.</h3>
                <h3 class=\"msg text-center\"> Please try again. </h3>
                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            $('.msg').hide();
                            $('#login').show();
                        }, 2000);
                    });
                </script>";
}
?>

<main>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-3 p-4 mt-md-4 rounded bg-white" id="directory">
                <h4 class="bg-light p-2 text-center" id="welcome">
                    <a class="text-dark" href="#"><i class="fas fa-flag"></i> &nbsp;&nbsp;Welcome</a>
                </h4>
                <div class="panel-group pt-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title bg-light p-2 text-center" style="font-size: 20px">
                                <a class="text-dark" data-toggle="collapse" href="#collapse1">
                                    <i class="fas fa-caret-right"></i> Destinations</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item p-1 Asia"><a class="nav-link text-dark" href="forum.php?dest=Asia">Asia</a></li>
                                <li class="list-group-item p-1 Europe"><a class="nav-link text-dark" href="forum.php?dest=Europe">Europe</a></li>
                                <li class="list-group-item p-1 'North America'"><a class="nav-link text-dark" href="forum.php?dest=North America">North America</a></li>
                                <li class="list-group-item p-1 'South America'"><a class="nav-link text-dark" href="forum.php?dest=South America">South America</a></li>
                                <li class="list-group-item p-1 Oceania"><a class="nav-link text-dark" href="forum.php?dest=Oceania">Oceania</a></li>
                                <li class="list-group-item p-1 Africa"><a class="nav-link text-dark" href="forum.php?dest=Africa">Africa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 bg-white m-0 m-md-4 mt-4 ml-lg-5 p-4 p-lg-5 rounded" id = "message">
                <h3 class="wlc">Welcome to Go Anywhere forum!</h3>
                <p class="pt-3">This is a platform for travellers to share experiences and prepare for trips.</p>
                <P>If you are a travel enthusiast, don't hesitate to join this cute family!</P>
                <p>After registration, start exploring by choosing your destination on the right:)</p>
            </div>
        </div>
    </div>
</main>
