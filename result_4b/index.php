<?php
include_once("utils/data.php");
$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
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
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        while ($vid = mysqli_fetch_array($video_show)) { ?>
                            <div class="col-md-4 p-2">
                                <div class="card">
                                    <img src="src/img/<?= $vid['thumbnail'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <?= "<a href='".$base_url."video_detail?id=".$vid['id']."'><h5 class='card-title'>" . $vid['title'] . "</h5></a>"; ?>
                                        <?= "<p class='card-text'>Kategori: <a href='".$base_url."categori?id=".$vid['id_category']."'> " . $vid['name'] . "</a></p>"; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5 class="card-header">Kategori Video</h5>
                        <div class="card-body">
                            <?php
                            while ($res = mysqli_fetch_array($category_show)) {
                                echo "<h5 class='card-title'>" . $res['name'] . "</h5>";
                            }
                            ?>
                        </div>
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