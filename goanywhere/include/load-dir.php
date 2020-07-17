<?php
    require "dbh.php";

    $continent = $_POST['continent'];
    $sql = "select * from articles where continent = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?err=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $continent);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <a class="h4" href=# value="<?php echo $row['articleID'];?>"><?php echo $row["title"]?></a>
                <span class="h5 cty">, <?php echo $row['country']?></span>
                <p><?php echo $row['username']?></p><hr>
        <?php
            }
        } else {
            echo "Hi, you will become the first one to share in this section!";
        }
    }
    ?>

<script>
    $(document).ready(function () {
        $('.h4').click(function () {
            var aid = $(this).attr('value');
            $('#display').load("include/load.php", {id: aid});
        });
    });
</script>

