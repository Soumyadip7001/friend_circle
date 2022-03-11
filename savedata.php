<?php

include "./conn.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$user_name = $_POST['user_name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];

$pic_name = "default.jpg";
$type = "default.jpg";

$image = $_FILES['image'];
$type = strtolower(explode(".", $image['name'])[1]);
$image_type = ["jpg", "png", "jpeg", "jfif"];


if(in_array($type,$image_type)){
    $pic_name = $user_name.".".$type;
    $profile_pic = "C:/xampp/htdocs/project/profile pic/".$pic_name;
    move_uploaded_file($image['tmp_name'], $profile_pic);
    
    $query_Con = "SELECT * FROM user_details WHERE user_name = '{$user_name}'";
    $run_Con = mysqli_query($con,$query_Con);
    if(mysqli_num_rows($run_Con) > 0){
        echo "<script>
                alert('Already Exists !!');
                window.location='{$host}/Signup.php';
            </script>";
    }else{
        $query_insert = "INSERT INTO user_details(first_name, last_name, gender, dob, number, user_name, email, password, pic) VALUES ('{$first_name}','{$last_name}','{$gender}','{$dob}','{$number}','{$user_name}','{$email}','{$password}', '{$pic_name}')";
        $run = mysqli_query($con,$query_insert) or die("Query Failed !");
        if($run){
            echo "<script>
                    alert('Registration Successful !!');
                    window.location='{$host}/Loginpage.php';
                </script>";
        }
    }

}else{
    echo 
    "<script>
        alert('\"{$type}\" - This type is not supported');
        window.location='{$host}/Signup.php';
    </script>";
}

?>