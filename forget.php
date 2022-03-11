<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            background: url("./images/logimg.jfif");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .container {
            width: 400px;
            height: 220px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 0 10px 0;
            color: #fff;
        }

        .container h1 {
            display: block;
            height: 40px;
            font-size: 30px;
        }

        .container form {
            width: 100%;
            height: calc(100% - 40px);
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .container form .input-box:last-child {
            display: none;
        }

        .container form .input-box input {
            outline: none;
            border: none;
            border-radius: 5px;
        }

        .container form .input-box .inputType {
            width: 260px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
            font-size: 15px;
            padding: 5px 6px;
        }

        .container form .input-box .inputType::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .container form .input-box input[type='submit'] {
            padding: 5px 8px;
            font-size: 15px;
            cursor: pointer;
            transition: all .3s ease-in;
        }

        .container form .input-box input[type='submit']:hover {
            background: #1368;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form action="./forget.php" method="POST" class="box" id="formS">
            <div class="input-box">
                <input type="text" class="inputType" placeholder="User name" name="user_name" id="user_name" required>
                <input type="submit" name="submit" onclick='change();' value="Send OTP" id="submit">
            </div>

            <div class="input-box" id="otp_container">
                <input type="text" class="inputType" placeholder="****" name="otp" id="otp">
                <input type="submit" name="otp_submit" value="Verify OTP" id="submi_otp">
            </div>
        </form>
    </div>
    <script>
        function change() {
            document.getElementById("submit").style.background = 'red';
            document.getElementById("submit").value = 'Loding..';
        }
    </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    include "./conn.php";

    $user_name = $_POST['user_name'];

    $query = "SELECT * FROM user_details WHERE user_name = '{$user_name}'";
    $run = mysqli_query($con, $query);
    if (mysqli_num_rows($run) > 0) {
        echo "<script>
                document.getElementById('submit').disabled = true;
                setTimeout(()=>{
                    document.getElementById('submit').disabled = false;
                },20000)
                document.getElementById('otp_container').style.display='block';
                document.getElementById('user_name').value='{$user_name}';
            </script>";
        $row = mysqli_fetch_assoc($run);
        $to_email = $row['email'];
        $subject = "OTP Verify";
        $otp = rand(1000, 9999);
        $body = "Your one Time OTP is {$otp}";
        $headers = "xyz@gmail.com";

        if (mail($to_email, $subject, $body)) {
            $otp_enter_query = "UPDATE user_details SET otp='{$otp}' WHERE user_name = '{$user_name}'";
            if (!mysqli_query($con, $otp_enter_query)) {
                echo "<script>
                    alert('Query Failed');
			        window.location='{$host}/forget.php';
                </script>";
            }
        } else {
            echo "<script>
			    alert('Email sending failed...');
		    </script>";
        }
    } else {
        echo "<script>
			alert('Email Not Found');
			// window.location='{$host}/forget.php';
		</script>";
    }
}

if (isset($_POST['otp_submit'])) {
    include "./conn.php";

    $user_name = $_POST['user_name'];
    $otp = $_POST['otp'];

    $otp_query = "SELECT * FROM user_details WHERE user_name = '{$user_name}' AND otp = '{$otp}'";
    $otp_run = mysqli_query($con, $otp_query);
    if (mysqli_num_rows($otp_run) > 0) {
        $otp_delete_query = "UPDATE user_details SET otp='' WHERE user_name = '{$user_name}'";
        if (mysqli_query($con, $otp_delete_query)) {
            session_start();
            $_SESSION['user_name'] = $user_name;
            echo "<script>
                window.location='{$host}/new_password.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('otp did not match');
        </script>";
    }
}

?>