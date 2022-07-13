<?php 

include 'include/config.php';

error_reporting(0);
session_start();

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
   // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username10'] = $row['email'];
		$_SESSION['userType10'] = $row['userType'];
		$_SESSION['user_id10'] = $row['sno'];

		$_SESSION['username101'] = $row['email'];
		$_SESSION['userType101'] = $row['userType'];
		$_SESSION['user_id101'] = $row['sno'];
        
		if($usertype == ""){
             echo "Don't Do IT";
		}
		else if($usertype == "Teacher"){
			header("Location: teacher.php");
		}
		else if($usertype == "Student"){
			header("Location: student.php");
		}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
		// $_SESSION['username10'] =$_SESSION['username100'] ;
		// $_SESSION['userType10'] = $_SESSION['userType100'] ;
		// $_SESSION['user_id10'] = $_SESSION['user_id100'];

?>
