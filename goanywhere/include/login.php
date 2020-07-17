<?php

if (isset($_POST['li-submit'])) {
    require 'dbh.php';
    $mailname = $_POST['mailname'];
    $password = $_POST['psw'];

    $sql = "select * from users where username = ? or email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?err=sqlerror");
        exit();
    } else {
        $hashedPsw = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $mailname, $mailname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)){
            $pswCheck = password_verify($password, $row['password']);
            if ($pswCheck == true) {
                session_start();
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location: ../index.php?login=success");
                exit();
            } else {
                header("Location: ../index.php?err=".$row['email']);
                exit();
            }
        } else {
            header("Location: ../index.php?err=nouser");
            exit();
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}