<?php
if (isset($_POST['submit'])) {
	include "./conn.php";
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user_details WHERE user_name = '{$user_name}' AND password = '{$password}'";
	$run = mysqli_query($con, $query) or die("Query Failed !");

	if (mysqli_num_rows($run) > 0) {
		session_start();
		$_SESSION['user_name'] = $user_name;
		echo "<script>
			alert('Successful');
			window.location='{$host}/Home_page.php';
		</script>";
	} else {
		echo "<script>
			alert('User Name Or Password Not Found');
			window.location='{$host}/Loginpage.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Log in</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			height: 100vh;
			width: 100%;
			/* background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("./images/logimg.jfif"); */
			background-image: url("./images/logimg.jfif");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}

		.Log-in {
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			height: 320px;
			width: 420px;
			background: rgba(0, 0, 0, 0.8);
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
			border-radius: 3px;
		}

		.writen {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);

		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
			font-size: 40px;
			color: #fff;
			font-family: 'Roboto Slab', serif;
		}

		.an {
			height: 20px;
			width: 100%;
			display: flex;
			justify-content: space-between;
			margin-bottom: 20px;
		}

		.an a:last-child {
			color: red;
			text-decoration: none;
			transition: all 0.4s ease;
			font-family: 'Roboto Slab', serif;
			font-size: 14px;
		}

		.an a:last-child:hover {
			color: green;
		}

		.input-box {
			display: block;
			box-sizing: border-box;
			margin-bottom: 20px;
			padding: 4px;
			width: 220px;
			height: 30px;
			border: 1px solid #fff;
			outline: none;
			font-size: 16px;
			transition: 0.2s;
			color: #fff;
			border-radius: 5px;
			background: transparent;
		}

		.submitbtn {
			margin-bottom: 28px;
			width: 120px;
			height: 32px;
			background: #f44336;
			border: none;
			border-radius: 5px;
			color: #fff;
			text-transform: uppercase;
			cursor: pointer;
			transition: 0.2s;
			display: block;
			position: relative;
			left: 50%;
			transform: translate(-50%);
		}

		.submitbtn:hover {
			background: #ff1100;
		}
	</style>
</head>

<body>
	<div class="Log-in">
		<div class="writen">
			<h1>Log-in</h1>
			<form action="Loginpage.php" method="post">
				<input type="text" class="input-box" name="user_name" placeholder="Username" required>

				<input type="password" name="password" class="input-box" placeholder="Password" required>

				<div class="an"><a href="./forget.php">Forget password</a> <a href=" ./Signup.php">Sign Up</a></div>

				<input type="submit" name="submit" class="submitbtn" value="Log in">
			</form>
		</div>
	</div>
</body>

</html>