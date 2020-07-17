<?php
if (isset($_POST['rgt-submit'])) {
    require 'dbh.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $password2 = $_POST['psw-rp'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z ]*$/",$username)) {
        header("Location: ../register.php?emailErr=invalid email&nameErr=invalid username");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?emailErr=invalid email");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/",$username)) {
        header("Location: ../register.php?nameErr=invalid username");
        exit();
    } elseif ($password != $password2) {
        header("Location: ../register.php?pswErr=inconsistent password");
        exit();
    } else {
        $sql = "select username from users where username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?err=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if ($result > 0) {
                header("Location: ../register.php?nameErr=username exists");
                exit();
            } else {
                $sql = "select email from users where email = ?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?err=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $result = mysqli_stmt_num_rows($stmt);
                    if ($result > 0) {
                        header("Location: ../register.php?emailErr=email exists");
                        exit();
                    } else {
                        $sql = "insert into users (username, email, password) values (?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../register.php?err=sqlerror");
                            exit();
                        } else {
                            $hashedPsw = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPsw);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../register.php?register=success");
                            exit();
                        }
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../register.php");
    exit();
}