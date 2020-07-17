<?php
require "header.php";
?>

<head>
    <meta charset="UTF-8">
    <title>register</title>

    <style>
        body {
            font-family: Corbel, sans-serif;
            background-color: lightsteelblue;
        }
        .register {
            margin: 30px auto 30px auto;
            width: 450px;
        }
        @media screen and (max-width: 600px) {
            .register {
                width: 400px;
            }
        }
    </style>

    <script>
        $(".nav-link").removeAttr('onclick');
        $("#map").hide();
    </script>
</head>

<main>
    <?php
        $emailErr = $nameErr = $pswErr =  "";
        $show = true;
        if(isset($_GET['register'])) {
            $show = false;
            ?>
            <h2 class="text-center text-white mt-5"> Successful! </h2>
            <h2 class="text-center text-white mt-4"> The login page will show in 3 seconds. </h2>
            <script>
                $(document).ready(function () {
                    setTimeout(function () {
                        $('#login').show();
                    }, 3000);
                });
            </script>
    <?php
        }
        if ($show) {
            ?>
            <form class="register bg-white p-3" action="include/signup.php" method="post">
                <h3 class="text-center">Register</h3>

                <label><b>Email</b></label> <span class="text-danger">
                    <?php if(isset($_GET['emailErr'])) {echo '* Invalid email';}?></span>
                <input type="text" class="w-100 p-2 mb-3" name="email" required>


                <label><b>Username</b></label> <span class="text-danger">
                    <?php if(isset($_GET['nameErr'])) {echo '* Invalid username';}?></span>
                <input type="text" class="w-100 p-2 mb-3" name="username" required>

                <label><b>Password</b></label>
                <input type="password" class="w-100 p-2 mb-3" name="psw" required>

                <label><b>Repeat Password</b></label> <span class="text-danger">
                    <?php if(isset($_GET['pswErr'])) {echo '* Inconsistent password';}?></span>
                <input type="password" class="w-100 p-2 mb-3" name="psw-rp" required>

                <p class="text-center">By creating an account you agree to our Terms & Privacy</p>

                <button type="submit" name="rgt-submit" class="btn btn-info w-100">Register</button>
            </form>
    <?php
        }
    ?>
</main>
