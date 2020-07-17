<?php
require "header.php";
require "include/dbh.php";
$dest = "";
if (isset($_GET['dest'])) {
    $dest = $_GET['dest'];
} else {
    $dest = "Asia";
}
?>

<head>
    <meta charset="UTF-8">
    <title><?php echo $dest?></title>

    <style>
        body {
            font-family: Corbel, sans-serif;
            background-color: #ededed;
        }
        .act {
            border-left: lightsteelblue solid 5px;
        }
        #directory {
            font-family: Corbel;
            background-color: white;
            max-height: 440px;
        }
        #welcome {
            font-size: 20px;
        }
        .title {
            font-family: "Lucida Handwriting";
            font-weight: bold;
            color: darkslateblue;
        }
        #post {
            display: none;
        }
        #country {
            height: 30px;
        }
        .h4 {
            color: darkslateblue;
        }
        .cty {
            color: lightsteelblue;
        }
    </style>

    <script>
        function post_check() {
            <?php if(isset($_SESSION['userid'])){?>
                $("#post").toggle();
            <?php } else {?>
                alert("Please log in before making a post!");
                $("#login").show();
            <?php }?>
        }
        function load_country() {
            $.get("include/country.json", function (data) {
                var code = '';
                $.each(data, function (key, value) {
                    if (value.continent == '<?php echo $dest?>') {
                        code += '<option value="'+value.country+'">'+value.country+'</option>';
                    }
                });
                $("#country").html(code);
            });
        }
        $(document).ready(function () {
            $('#display').load("include/load-dir.php", {continent: "<?php echo $dest?>"});
            load_country();
            $('.h4').click(function () {
                var aid = $(this).attr('value');
                $('#display').load("include/load.php", {id: aid});
                $('#display-cmt').show();
            });
        });
    </script>
</head>

<?php
    if(isset($_GET['post'])) {
        echo "<h2 class=\"msg text-center mt-5\"> Submit successfully! </h2>
                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            $('.msg').hide();
                        }, 2000);
                    });
                </script>";
    }
?>

<main>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-3 p-4 mt-md-4 rounded" id="directory">
                <h4 class="bg-light p-2 text-center" id="welcome">
                    <a class="text-dark" href="index.php?redir=true"><i class="fas fa-flag"></i> &nbsp;&nbsp;Welcome</a>
                </h4>
                <div class="panel-group pt-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title bg-light p-2 text-center" style="font-size: 20px">
                                <a class="text-dark" data-toggle="collapse" href="#collapse1">
                                    <i class="fas fa-caret-right"></i> Destinations</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item p-1 Asia <?php if($dest=='Asia') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=Asia">Asia</a></li>
                                <li class="list-group-item p-1 Europe <?php if($dest=='Europe') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=Europe">Europe</a></li>
                                <li class="list-group-item p-1 'North America' <?php if($dest=='North America') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=North America">North America</a></li>
                                <li class="list-group-item p-1 'South America' <?php if($dest=='South America') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=South America">South America</a></li>
                                <li class="list-group-item p-1 Oceania <?php if($dest=='Oceania') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=Oceania">Oceania</a></li>
                                <li class="list-group-item p-1 Africa <?php if($dest=='Africa') {echo 'act';}?>"><a class="nav-link text-dark" href="forum.php?dest=Africa">Africa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-0 m-md-4 mt-4 ml-lg-5">
                <div class="bg-white p-4 rounded">
                    <h3 class="title"><?php echo $dest?></h3>
                    <button onclick="post_check()" class="mt-3 btn btn-outline-secondary"><i class="fas fa-plus"></i> Make a post</button>
                </div>

                <div id="post" class="bg-white rounded mt-3">
                    <form class="post-content p-3" action="include/post.php" method="post">
                        <input type="hidden" id="dest" name="dest" value="<?php echo $dest?>">
                        <div class="row mb-2">
                            <div class="col-2">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-10">
                                <input type="text" id="title" name="title" class="w-100" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-2">
                                <label for="country">Country</label>
                            </div>
                            <div class="col-10">
                                <select id="country" name="country">Select a country</select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="content">Content</label>
                            </div>
                            <div class="col-10">
                                <textarea id="content" name="content" class="w-100" style="height:350px" required></textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" name="post-submit" class="btn btn-info ml-2">Submit</button>
                            <button type="reset" name="cancel" class="btn btn-secondary" onclick="$('#post').hide()">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="mt-3 bg-white p-4 rounded" id="display">

                </div>
            </div>
        </div>
    </div>
</main>