<?php
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', '','tour') or die("Connection failed: " . mysqli_connect_error());
		$fname = $_POST['fname'];
		$email = $_POST['email'];
        $no = $_POST['No'];
		$pass = $_POST['Pass'];
        $cpass = $_POST['CPass'];
		
		if(empty($fname) | empty($email) | empty($no) | empty($pass) | empty($cpass)){
			echo '<script>alert("Please fill all fields.")</script>';
		}
		elseif($pass!=$cpass){
			echo '<script>alert("Passwords do not match.")</script>';
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo '<script>alert("Please enter a valid email address.")</script>';
		}
		else{
			$sql = "INSERT INTO `login` (`fname`,`email`,`No`,`Pass`) VALUES ('$fname','$email','$no','$pass')";
			
		    $query = mysqli_query($conn,$sql);
		    if ($query) {
				session_start();
				$_SESSION['fname']=$fname;
				$_SESSION['email']=$email;
				$_SESSION["loggedin"] = true;
                header("Location:reg.php");
		    } else {
			    echo "An error occured while saving the data.";
		    }
		}
		
	}
?>
<html>
<body>
</body>
</html>