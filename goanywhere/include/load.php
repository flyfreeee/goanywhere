<?php
require "dbh.php";
session_start();

$id = $_POST['id'];
$sql = "select * from articles where articleID = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?err=sqlerror");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    ?>
    <h4><?php echo $row['title']?></h4>
    <p class='mt-2'><?php echo $row['username']?> &nbsp;<?php echo $row['day']?></p>
    <p><?php echo nl2br($row['content'])?></p>
    <div class="d-flex flex-row-reverse">
        <button type="submit" name="comment" class="btn btn-outline-info ml-2" onclick="$('#cmtarea').show()">
            <i class="fas fa-pencil-alt"></i> Comment</button>
        <button type="submit" id="like" class="btn btn-outline-danger">
            <i class="fas fa-heart"></i> Like</button>
    </div>
    <div id="cmtarea">
        <textarea id="msg" class="w-100 mt-3" style="height:100px" required></textarea>
        <div class="d-flex flex-row-reverse">
            <button type="submit" id="comment-submit" class="btn btn-outline-info ml-2">Submit</button>
            <button type="reset" name="cancel" class="btn btn-outline-secondary" onclick="$('#cmtarea').hide()">Cancel</button>
        </div>
    </div>
    <div id="display-like" class="mt-4"></div>
    <hr>
    <h4 class="mb-3">Comments</h4>
    <div  id="display-cmt" class="p-0"></div>
    <button value="<?php echo $row['continent']?>" class='btn btn-outline-secondary mt-3 back'>back</button>
    <?php
}
?>

<head>
    <script>
        $(document).ready(function () {
            $('#display-cmt').load("include/load-cmt.php", {id: <?php echo $id;?>});
            $('#display-like').load("include/load-like.php", {id: <?php echo $id;?>});
            $('#comment-submit').click(function () {
                <?php if(isset($_SESSION['userid'])){?>
                $.post ("include/comment.php", {
                    aID: "<?php echo $id;?>",
                    msg: $("#msg").val()
                }, function() {
                    alert("You comment is submitted!");
                    $('#msg').val("");
                    $('#display-cmt').load("include/load-cmt.php", {id: <?php echo $id;?>});
                });
                <?php } else {?>
                alert("Please log in before commenting a post!");
                $("#login").show();
                <?php }?>
            });
            $('#like').click(function () {
                <?php if(isset($_SESSION['userid'])){?>
                    $.post("include/like.php", {
                        aID: "<?php echo $id;?>"
                    }, function (data) {
                        if (data=="exist") {
                            alert("You have already liked it!");
                        } else {
                            alert("successful!");
                            $('#display-like').load("include/load-like.php", {id: <?php echo $id;?>});
                        }
                    });
                <?php } else {?>
                    alert("Please log in before liking a post!");
                    $("#login").show();
                <?php }?>
            });
            $('.back').click(function () {
                var ctn = $(this).attr("value");
                $('#display').load("include/load-dir.php", {continent: ctn});
            });
        });
    </script>

    <style>
        #cmtarea {
            display: none;
        }
        #display-like {
            color: crimson;
            font-size: 17px;
        }
    </style>
</head>









