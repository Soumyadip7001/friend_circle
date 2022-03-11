<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Sign-up</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			height: 100vh;
			width: 100%;
			background-image: linear-gradient(rgba(0, 0, 0, 0.7),
					rgba(0, 0, 0, 0.7)),
				url("./images/signupimg.jfif");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}

		.Sign-upbox {
			height: 640px;
			width: 350px;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: rgba(0, 0, 0, 0.6);
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
			border-radius: 3px;
			text-align: center;
			color: #fff;
		}

		.left-box {
			width: 100%;
			height: 100%;
			padding-top: 10px;
		}

		h1 {
			display: block;
			height: 40px;
			font-size: 28px;
			font-family: "Roboto Slab", serif;
		}

		form {
			width: 100%;
			height: calc(100% - 40px);
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			align-items: center;
		}

		.input_val .input-box {
			display: block;
			box-sizing: border-box;
			padding: 4px;
			width: 220px;
			color: #fff;
			height: 30px;
			border: 1px solid #fff;
			outline: none;
			font-size: 15px;
			transition: 0.2s;
			background: transparent;
			border-radius: 5px;
		}

		.input_val span {
			display: block;
			font-size: 12px;
			margin-top: 2px;
			text-align: left;
			color: red;
			font-style: oblique;
		}

		.input_val .submit-btn {
			width: 120px;
			height: 30px;
			background: #f44336;
			border: none;
			border-radius: 5px;
			text-transform: uppercase;
			cursor: pointer;
			transition: 0.2s;
		}

		.submit-btn:hover {
			background: #ff1100;
		}

		.check {
			font-size: 14px;
			font-style: oblique;
		}
	</style>
</head>

<body>
	<div class="Sign-upbox">
		<div class="left-box">
			<h1>Sign Up</h1>
			<form action="./savedata.php" id="form" method="POST" enctype="multipart/form-data">
				<div class="input_val">
					<input type="text" class="input-box" name="first_name" id="first_name" placeholder="first Name*" required />
					<span></span>
				</div>
				<div class="input_val">
					<input type="text" class="input-box" name="last_name" id="last_name" placeholder="Last name*"required />
					<span></span>
				</div>
				<div class="input_val">
					Gender:
					<input type="radio" name="gender" value="Male" id="male" /><label for="male">Male</label>
					<input type="radio" name="gender" value="Female" id="female" /><label for="female">Female</label>
					<input type="radio" name="gender" value="Other" id="other" /><label for="other">Other</label>
				</div>
				<div class="input_val">
					<input type="text" class="input-box" name="user_name" id="user_name" placeholder="Username*"required />
					<span></span>
				</div>
				<div class="input_val">
					<input type="file" class="input-box" name="image" id="image" placeholder="Insert Picture" />
					<span></span>
				</div>
				<div class="input_val" style="margin-top: -10px">
					<label for="dob" style="font-size: 10px;">Date of Birth</label>
					<input type="date" class="input-box" name="dob" id="dob" placeholder="Date-of-birth" />
					<span></span>
				</div>
				<div class="input_val">
					<input type="number" name="number" id="number" class="input-box" placeholder="Contact number" />
					<span></span>
				</div>
				<div class="input_val">
					<input type="email" class="input-box" name="email" id="email" placeholder="E-mail@.com" />
					<span></span>
				</div>
				<div class="input_val">
					<input type="password" class="input-box" id="pass" name="password" placeholder="Enter password*"required />
					<span></span>
				</div>
				<div class="input_val">
					<input type="password" class="input-box" id="con_pass" name="con_password" placeholder="Confirm password*"required />
					<span></span>
				</div>
				<div class="input_val">
					<input type="checkbox" name="Checktic" id="Checktic" />
					<label class="check" for="Checktic">I agreed all term and conductions</label>
				</div>
				<div class="input_val">
					<input type="submit" name="submit" id="submit" class="submit-btn" value="Sign-in" />
				</div>
			</form>
		</div>
	</div>

	<script>
		let form = document.getElementById("form");

		form.addEventListener("submit", (e) => {
			if (isTrue()) {
				e.preventDefault();
			}
		});

		function isTrue() {
			let result = false;

			let first_name = document.getElementById("first_name");
			let last_name = document.getElementById("last_name");
			let user_name = document.getElementById("user_name");
			let image = document.getElementById("image");
			let dob = document.getElementById("dob");
			let number = document.getElementById("number");
			let email = document.getElementById("email");
			let pass = document.getElementById("pass");
			let con_pass = document.getElementById("con_pass");
			let checktic = document.getElementById("Checktic");
			let span_ch = document.querySelectorAll(".input_val span");
			const emailChecker = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if (first_name.value === "" || first_name.value == null) {
				span_ch[0].innerText = "* Please fill your first name";
				result = passNull();
			} else {
				span_ch[0].innerText = "";
				result = false;
			}

			if (last_name.value === "" || last_name.value == null) {
				span_ch[1].innerText = "* Please fill your last name";
				result = passNull();
			} else {
				span_ch[1].innerText = "";
				result = false;
			}

			if (user_name.value === "" || user_name.value == null) {
				span_ch[2].innerText = "* Please fill your user name";
				result = passNull();
			} else {
				span_ch[2].innerText = "";
				result = false;
			}

			if (image.value === "" || image.value == null) {
				span_ch[3].innerText = "* Please Select An Image";
				result = passNull();
			} else {
				span_ch[3].innerText = "";
				result = false;
			}

			if (dob.value === "" || dob.value == null) {
				span_ch[4].innerText = "* Please fill your date of birth";
				result = passNull();
			} else {
				span_ch[4].innerText = "";
				result = false;
			}

			if (number.value === "" || number.value == null) {
				span_ch[5].innerText = "* Please fill your number";
				result = passNull();
			} else {
				span_ch[5].innerText = "";
				result = false;
			}

			if (email.value === "" || email.value == null) {
				span_ch[6].innerText = "* Please fill your email";
				result = passNull();
			} else if (email.value.match(emailChecker)) {
				span_ch[6].innerText = "";
				result = false;
			} else {
				span_ch[6].innerText = "* Your email is not valid";
				result = passNull();
			}

			if (pass.value === "" || pass.value == null) {
				span_ch[7].innerText = "* Please fill your password";
				result = true;
			} else if (pass.value != con_pass.value) {
				span_ch[7].innerText = "* Password and confirm password not match";
				span_ch[8].innerText = "* Password and confirm password not match";
				result = true;
			} else {
				span_ch[7].innerText = "";
				span_ch[8].innerText = "";
				result = false;
				if (checktic.checked) {
					result = false;
				} else {
					result = true;
				}
			}

			function passNull() {
				pass.value = "";
				con_pass.value = "";
				result = true;
			}

			return result;
		}
	</script>
</body>

</html>