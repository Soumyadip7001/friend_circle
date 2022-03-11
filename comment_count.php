<?php
include "./conn.php";

$id = $_POST['id'];


$comment_sql = "SELECT * FROM `comments` WHERE comment_post_id = $id";
$comment_result = mysqli_query($con, $comment_sql);
$comment_count = mysqli_num_rows($comment_result);

echo $comment_count;
