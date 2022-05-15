<?php
    session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', '','tour') or die("Connection failed: " . mysqli_connect_error());
		$email = trim($_POST['email']);
		$pass = trim($_POST['Pass']);
		
		if(empty($email) || empty($pass)){
			echo '<script>alert("All fields are necessary!!")</script>';
		}
		else{
			$sql = "select * from login where email = '$email' and Pass = '$pass'";
			$result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			if($count == 1){
				session_start();
				$_SESSION["loggedin"] = true;
				$_SESSION["email"] = $email;
				$row = mysqli_fetch_assoc(mysqli_query($conn, "select fname from login where email = '$email' and Pass = '$pass'"));
				$_SESSION['fname'] = $row['fname'];
				header("Location:login.php");
			} else {
				echo "An error occured while saving the data.";
			}
		}
	}
?>