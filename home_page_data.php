<?php
session_start();
include "./conn.php";

if(isset($_POST['post_data'])){
    $user_name = $_SESSION['user_name'];
    $text = $_POST['upload_text'];
    $image = $_FILES['upload_image'];
    $type = strtolower(explode(".", $image['name'])[1]);
    $image_type = ["jpg", "png", "jpeg", "jfif"];

    if(in_array($type,$image_type)){
        $new_image_name = $user_name.time().".".$type;
        $feeds_images = "C:/xampp/htdocs/project/feeds images/".$new_image_name;
        move_uploaded_file($image['tmp_name'], $feeds_images);
        $sql = "INSERT INTO `post`(`post_user_name`, `text`, `image`) VALUES ('{$user_name}','{$text}','{$new_image_name}')";
        $result = mysqli_query($con,$sql) or die("Query Failed");
        if($result){
            echo 
            "<script>
                window.location='{$host}/Home_page.php';
            </script>";
        }
    }else{
        echo 
        "<script>
            alert('\"{$type}\" - This type is not supported');
            window.location='{$host}/Home_page.php';
        </script>";
    }

    
}



?>