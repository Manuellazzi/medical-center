<?php
include 'db_conn.php';

$doctorname = "";
$patientname = "";
$date = "";
$medicines = "";

$errorMessage="";
$successMessage="";

if(isset($_POST['submit'])){

$doctorname = $_POST['doctorname'];
$patientname = $_POST['patientname'];
$date = $_POST['date'];
$medicines = $_POST['medicines'];

do{
  if (empty($doctorname) || empty($patientname) ||empty($date) ||empty($medicines)){
  $errorMessage="Fill the required fields";
  break;}

$sql = "INSERT INTO prescription (doctor_name,patient_name,date,medicines) 
VALUES('$doctorname', '$patientname', '$date', '$medicines')";
$res = mysqli_query($conn, $sql);

if (!$res) {
  $errorMessage="Invalid query: " . $conn->error;
  break;
}


$doctorname = "";
$patientname = "";
$date = "";
$medicines = "";

 $successMessage="filled correctly the prescription is saved";

 }while(false);
}
?>

<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prescription</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 
</head>
<body>

  <div class="wrapper">
    <header>fill prescription</header>
    <form  method="post"> 
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="doctorname" placeholder="doctor name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="patientname" placeholder="patient name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="date" name="date" placeholder="Date">
          <i class="material-icons">event_note</i>
        </div>
    
        </div>
      
      <div class="message">
        <textarea placeholder="medicines" name="medicines"></textarea>
        <i class="material-icons">medication</i>
      </div>
     
      <?php

if (!empty($errorMessage)){
echo"
<div class='alert alert-warning alert-dismissible fade show' role='alert' >
<strong>$errorMessage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
   if (!empty($successMessage)){
     echo"
     
     <div class='alert alert-warning alert-dismissible fade show' role='alert' >
     <strong>$successMessage</strong>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>
    
     ";
   }?>

      <div class="button-area">
        <button type="submit" name="submit">Submit</button>
      <span></span>
      </div>

    </form>
  </div>
  
 
<?php
  /*$dname = htmlspecialchars($_POST['dname']);
  $pname= htmlspecialchars($_POST['pname']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);
  if(!empty($pname) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "receiver_email_address"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
  session_start(); 
include "db_conn.php";
if (isset($_POST['dname']) && isset($_POST['pname'])
    && isset($_POST['date']) && isset($_POST['medicine'])) {
$dname=$_POST['dname'];
$pname=$_POST['pname'];
$date=$_POST['date'];
$medicine=$_POST['medicine'];}
if (isset($_POST['dname']) && isset($_POST['pname'])
    && isset($_POST['date']) && isset($_POST['medicine'])) {

	

  if (empty($dname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pname)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($date)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($medicine)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}*/
  
?>
<script src="script2.js"></script>
</body>
</html>