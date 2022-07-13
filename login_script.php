<?php 

include 'include/config.php';

// error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($conn, $email);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($conn, $password);
	$password = md5($_POST['password']);
	$usertype = $_POST['userType'];
	$usertype = mysqli_real_escape_string($conn, $usertype);

	$sql = "SELECT sno, username, userType FROM register WHERE email = '$email' AND password = '$password' AND userType = '$usertype'";
	$result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['email'];
		$_SESSION['userType'] = $row['userType'];
		$_SESSION['user_id'] = $row['sno'];

		if($usertype == "Teacher"){
			header("Location: teacher.php");
		}
		else if($usertype == "Student"){
			header("Location: student.php");
		}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
