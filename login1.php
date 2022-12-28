<?php 
session_start(); 
include "db_conn.php";

if (isset($_SESSION["doctor"])){header("Location: home.php");}
if (isset($_SESSION["nurse"])){header("Location: nurse.php");}
if (isset($_SESSION["secretary"])){header("Location: secretary.php");}
if (isset($_SESSION["admin"])){header("Location: admin.php");}
/*if (isset($_POST['submit']))*/


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            switch($role){
				case "doctor":
					header("Location: home.php");
				 exit();

				 case "nurse":
					header("Location: nurse.php");
				 exit();

				 case "secretary":
					header("Location: secretary.php");
				 exit();

				 case "admin":
					header("Location: admin.php");
				 exit();
			}

			/*if ($row['role'] == "doctor") {
				header("Location: home.php");
				 exit();
			}
             else if ($row['role'] == "nurse"){
				header("Location: nurse.php");
				 exit();
			}
			 else if ($row['role'] == "secretary"){
				header("Location: secretary.php");
				 exit();
			}

			 else if ($row['role'] == "admin"){
				header("Location: admin.php");
				 exit();
			}*/

            /*if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
			 $_SESSION['role'] = $row['doctor'];
            	header("Location: home.php");
		       exit();
			 }*/
			
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}