<?php
	var_dump($_POST['username']);
	var_dump($_POST['password']);

		$user = $_POST['username'];
		$pass = $_POST['password'];
		echo $user;
		$user = stripslashes($user);
		$pass = stripslashes($pass);
		$user2 = mysqli_real_escape_string($con, $user);
		$pass2 = mysqli_real_escape_string($con, $pass);
		
		$sql = "SELECT * FROM login WHERE user_name = '$user2' and user_password_hash = '$pass2'";
		$result = mysqli_query($con, $sql);

		$count = mysqli_num_rows($result);
		if($count == 1) {
			
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;
			header("location:index.php");
		} else {
			echo"wrong password or username";
		}
?>
	