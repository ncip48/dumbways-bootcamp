<?php
include_once("utils/db_connection.php");
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_POST['update_category'])) {
    $id = $_POST['a'];
    $name = $_POST['b'];
    $result = mysqli_query($conn, "UPDATE category_tb SET name='$name' WHERE id=$id");
    header("Location: $base_url");
} else if (isset($_POST['update_video'])) {
    $id = $_POST['id'];
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
    //echo "Upload berhasil!<br/>";
    //echo "Link: <a href='" . $imgupload . $img . "'>" . $img . "</a>";
    //echo "Link: <a href='" . $videoupload . $video . "'>" . $video . "</a>";
    $result = mysqli_query($conn, "UPDATE video_tb SET title='$title',category_id='$kategori',attache='$video',thumbnail='$img' WHERE id=$id");
    header("Location: $base_url");
}
