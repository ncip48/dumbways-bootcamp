<?php
$id = $_GET['id'];
include_once("utils/db_connection.php");
$result = mysqli_query($conn, "SELECT * FROM video_tb WHERE category_id=$id");
//$r = mysqli_fetch_row($result);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>my Video</title>
</head>

<body>
    <?php include "header.php" ?>
    <section>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        while ($vid = mysqli_fetch_array($result)) { ?>
                            <div class="col-md-4 p-2">
                                <div class="card">
                                    <img src="src/img/<?= $vid['thumbnail'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <?= "<a href='".$base_url."video_detail?id=".$vid['id']."'><h5 class='card-title'>" . $vid['title'] . "</h5></a>"; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>