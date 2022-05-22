<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include '_dbconnect.php';
	$username = $_POST['signupFirstName'];
	$email = $_POST['loginEmail'];
	$pass = $_POST['loginPass'];

	$sql = "select * from users where user_email='$email'";
	$result = mysqli_query($con, $sql);
	$numRows = mysqli_num_rows($result);
	if($numRows == 1){
		$row = mysqli_fetch_assoc($result);
		if(password_verify($pass, $row['user_pass'])){
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['sno'] = $row['sno'];
			$_SESSION['useremail'] = $email;
            $_SESSION['userfirstname'] = $username;
			// echo "logged in". $email;
		}
		header("Location: /index.php");
	}
		header("Location: /index.php");
}

?>