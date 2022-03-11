<?php
include "./conn.php";

if(isset($_POST['post_id'])){
    $user_name = $_POST['user_name'];
    $post_id = $_POST['post_id'];
    $check_user_name = mysqli_query($con, "SELECT * FROM `like_dislike` WHERE user_id = '$user_name' AND post_id = $post_id");
    if(mysqli_num_rows($check_user_name) > 0){
        $data = mysqli_fetch_assoc($check_user_name);
        if($data['like_count'] == 2){
            $like_count_sql = "UPDATE `like_dislike` SET like_count=like_count-1 WHERE user_id = '$user_name' AND post_id = $post_id";
            $operation = "unlike";
        }else{
            $like_count_sql = "UPDATE `like_dislike` SET like_count=like_count+1 WHERE user_id = '$user_name' AND post_id = $post_id";
            $operation = "like";
        }
    }else{
        $like_count_sql = "INSERT INTO `like_dislike`(`user_id`, `post_id`, `like_count`) VALUES ('$user_name', $post_id, 2)";
        $operation = "like";
    }
    $like_count = mysqli_query($con, $like_count_sql) or die("Query FAlied");
    $like_count_send = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `like_dislike` WHERE post_id = $post_id AND like_count = 2"));
    echo json_encode(['operation'=>$operation, "like_count"=>$like_count_send]);
}


?>