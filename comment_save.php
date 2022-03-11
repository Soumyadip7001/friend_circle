<?php
include "./conn.php";

$id = $_POST['id'];
$user_name = $_POST['user_name'];
$data = $_POST['data'];

$sql = "INSERT INTO `comments`(`user_name`, `comment_post_id`, `comment_data`) VALUES ('{$user_name}',{$id},'{$data}')";
$result = mysqli_query($con, $sql) or die("Query Failed");




$pPic = mysqli_query($con, "SELECT pic FROM `user_details` WHERE user_name = '{$user_name}'") or die("Query failed");
$pPic = mysqli_fetch_assoc($pPic);


if ($result) {
    echo "<div class='user-comment'>
            <span><img src='./profile pic/{$pPic['pic']}'></span>
            <span><p>{$data}</p></span>
        </div>";
} else {
    echo 0;
}
