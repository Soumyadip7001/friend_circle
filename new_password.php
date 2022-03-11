<?php
include "./conn.php";
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: $host/forget.php");
}
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_name = $_POST['user_name'];

    if($password == $cpassword){
        session_destroy();
        $sql = "UPDATE `user_details` SET `password`='{$password}' WHERE user_name = '{$user_name}'";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('Password Reset Successful !!     Please Log in');
                window.location='{$host}/Loginpage.php';
            </script>";
        }else{
            die("Query Failed");
        }
    }else{
        echo "<script>
			alert('Password and Confirm password Not Found');
			window.location='{$host}/new_password.php';
		</script>";
    }

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot_password..</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("./images/logimg.jfif");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .main_div {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .box {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 450px;
            width: 400px;
            transform: translate(-50%, -50%);
            padding: 50px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .box h1 {
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
            text-transform: capitalize;
        }

        .box .inputBox {
            position: relative;

        }

        .box .inputBox input {
            width: 100%;

            padding: 10px;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
        }

        .box .inputBox label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            transition: all .2s ease;
            z-index: -1;
        }

        .box .inputBox input:focus~label,
        .box .inputBox input:valid~label {
            top: -40px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }


        .box input[type="submit"] {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            border-radius: 5px;
            padding: 8px 135px;
            font-size: 14px;
        }
        #submit{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main_div">
        <div class="box">
            <h1>Forgot password</h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="inputBox">
                    <input type="hidden" name="user_name" value="<?php echo $_SESSION['user_name']; ?>">
                    <input type="password" name="password" autocomplete="off" required>
                    <label>New password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="cpassword" autocomplete="off" required>
                    <label>Confirm password</label>
                </div>
                <input type="submit" id="submit" name="submit" value="submit">
            </form>

        </div>
    </div>
</body>

</html>