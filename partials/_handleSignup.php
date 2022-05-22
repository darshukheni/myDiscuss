<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	# code...
	INCLUDE '_dbconnect.php';
	$user_first_name = $_POST['signupFirstName'];
	$user_last_name = $_POST['signupLastName'];
	$user_email = $_POST['signupEmail'];
	$pass = $_POST['signupPassword'];
	$cpass = $_POST['signupcPassword'];

	// check whether this email exists
	$existSql = "select * from `users` where user_email = '$user_email'";
	$result = mysqli_query($con, $existSql);
	$numRows = mysqli_num_rows($result);
	if ($numRows > 0) {
		# code...
		$showError = "Email already in use";
	}
	else{
		if ($pass == $cpass){
			$hash = password_hash($pass, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `users` (`user_first_name`, `user_last_name`, `user_email`, `user_pass`, `timestamp`) VALUES ('$user_first_name', '$user_last_name', '$user_email', '$hash', current_timestamp())";
			$result = mysqli_query($con, $sql);
			if ($result) {
				# code...
				$showAlert = true;
				header("Location: /index.php?signupsuccess=true");
				exit();
			}
		}
		else{
			$showError = "Password do not match";

		}
	}
	header("Location: /index.php?signupsuccess=false&error=$showError");

}

?>