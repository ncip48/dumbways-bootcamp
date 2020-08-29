<?php
include_once("utils/db_connection.php");
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_POST['submit_category'])) {
    $nama = $_POST['a'];
    $result = mysqli_query($conn, "INSERT INTO category_tb(name) VALUES('$nama')");
    header("Location: $base_url");
} else if (isset($_POST['submit_video'])) {
    $title = $_POST['a'];
    $kategori = $_POST['b'];
    $img = $_FILES['c']['name'];
    $imgtemp = $_FILES['c']['tmp_name'];
    $imgupload = "src/img/";
    $teruploadimage = move_uploaded_file($imgtemp, $imgupload . $img);

    $video = $_FILES['d']['name'];
    $videotemp = $_FILES['d']['tmp_name'];
    $videoupload = "src/video/";
    $teruploadvideo = move_uploaded_file($videotemp, $videoupload . $video);

    if ($teruploadimage && $teruploadvideo) {
        //echo "Upload berhasil!<br/>";
        //echo "Link: <a href='" . $imgupload . $img . "'>" . $img . "</a>";
        //echo "Link: <a href='" . $videoupload . $video . "'>" . $video . "</a>";
        $result = mysqli_query($conn, "INSERT INTO video_tb(title,category_id,attache,thumbnail) VALUES('$title','$kategori','$video','$img')");
        header("Location: $base_url");
    } else {
        echo "Upload Gagal!";
    }
}
