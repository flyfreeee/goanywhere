<?php
    require "dbh.php";
    session_start();

    $aID = $_POST['aID'];
    $uID = $_SESSION['userid'];

    $check = "select * from likes where articleID='".$aID."' and userID='".$uID."'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result)>0){
        echo "exist";
    } else {
        $sql = "insert into likes (articleID, userID) values ('" . $aID . "','" . $uID . "')";
        mysqli_query($conn, $sql);
    }


