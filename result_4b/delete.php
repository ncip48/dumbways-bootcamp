<?php
include_once("utils/db_connection.php");
$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
$id = $_GET['id'];
$type = $_GET['type'];
if($type == 'kategori') {
    $result = mysqli_query($conn, "DELETE FROM category_tb WHERE id=$id");
}else if($type == 'video'){
    $result = mysqli_query($conn, "DELETE FROM video_tb WHERE id=$id");
}
header("Location: $base_url");