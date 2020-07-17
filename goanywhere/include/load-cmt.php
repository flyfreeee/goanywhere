<?php
require "dbh.php";

$id = $_POST['id'];
$sql = "select username, day, content from comments join users on comments.userID = users.id where articleID='".$id."'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)) {
        ?>
        <div class="border border-light mb-2">
            <p class="bg-light p-0 pl-3 pr-3"><?php echo $row['username']?> posted on <?php echo $row['day']?></p>
            <p class="p-0 pl-3 pr-3"><?php echo $row['content']?></p>
        </div>
        <?php
    }
} else {
    echo "You will be the first one to leave a comment here!";
}
