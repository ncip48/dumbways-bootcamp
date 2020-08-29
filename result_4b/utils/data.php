<?php 
include_once("db_connection.php");
$category_show = mysqli_query($conn, "SELECT * FROM category_tb ORDER BY id DESC");
$video_show = mysqli_query($conn, "SELECT a.*, b.name, b.id as id_category FROM video_tb a JOIN category_tb b ON a.category_id = b.id ORDER BY a.id DESC");
?>