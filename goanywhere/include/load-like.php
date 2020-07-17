<?php
require "dbh.php";

$id = $_POST['id'];
$sql = "select username from likes join users on likes.userID = users.id where articleID='".$id."'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $like = "like";
    if(mysqli_num_rows($result)==1) {
        $like = "likes";
    }
    $output = "";
    while($row=mysqli_fetch_assoc($result)) {
        $output .= $row['username'].", ";
    }
    ?>
    <i class="fas fa-heart"></i>
<?php
    echo " ".substr($output, 0, strlen($output)-2)." ".$like." this post";
}