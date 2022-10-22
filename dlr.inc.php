<?php

if (isset($_POST['plsubmit'])){

	require 'database.php';

	$password=$_POST['rpassword'];
	$confirmPassword=$_POST['confirmPassword'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phone'];
	$name=$_POST['name'];

	#if (empty($username) || empty($password) || empty($confirmPassword) || empty($workId) || empty($email) || empty($phoneNumber) || empty($name) || empty($title)) {
	#	header("Location: mlr.php?error=emptyfield");
	#	exit();
	#}
	#else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
	//	header("Location: register.php?error=invalidusername&username=".$username);
	//	exit();
	//}
	//else if (!preg_match("/^[a-zA-Z]*/", $name)) {
	//	header("Location: register.php?error=invalid&name=".$name);
	//	exit();
	//}
	//else if (!preg_match("/^[0-9]*/", $phoneNumber)) {
	//	header("Location: register.php?error=invalid&phoneNumber=".$phoneNumber);
	//	exit();
	//}
	//else if (!preg_match("/^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+*/", $email)) {
	//	header("Location: register.php?error=invalid&email=".$email);
	//	exit();
	//}
	if ($password !== $confirmPassword) {
		header("Location: PLR.php?error=passwordsdonotmatch");
		exit();
	}

	else {
		$sql="SELECT Phone FROM passenger WHERE Phone = ?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: PLR.php?error=sqlerrror");
			exit();
		}

		else{
			mysqli_stmt_bind_param($stmt, "i", $phoneNumber);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rowCount = mysqli_stmt_num_rows($stmt);

			if ($rowcount > 0) {
				header("Location: PLR.php?error=UserExixts");
				exit();
				}

			else{
				$sql = "INSERT INTO passenger (Name, E_mail, Phone, Password_) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location:  PLR.php?error=sqlerrror");
				exit();
						}
			else{
				$hashedPass = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ssis",$name, $email, $phoneNumber, $hashedPass);
				mysqli_stmt_execute($stmt);
				header("Location:  PLR.php?success=registered");
				exit();
					}

				}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  PLR.php");
}

?>
