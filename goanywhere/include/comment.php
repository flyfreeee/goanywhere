<?php
    require "dbh.php";
    session_start();

    $aID = $_POST['aID'];
    $msg = $_POST['msg'];
    $uID = $_SESSION['userid'];

    $sql = "insert into comments (articleID, userID, content) values ('" . $aID . "','" . $uID . "','" . $msg . "')";
    mysqli_query($conn, $sql);
