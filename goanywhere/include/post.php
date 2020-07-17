<?php
session_start();
if (isset($_POST['post-submit'])) {
    require "dbh.php";

    $username = $_SESSION['username'];
    $continent = $_POST['dest'];
    $country = $_POST['country'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "insert into articles (username, continent, country, title, content) values (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?err=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $username, $continent, $country, $title, $content);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result();
        header("Location: ../forum.php?dest=".$continent."&post=success");
        exit();
    }
}


