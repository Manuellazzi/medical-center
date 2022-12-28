<?php 
include "db_conn.php";

    $firstname = "";
    $lastname = "";
    $phonenumber = "";
    $dateofbirth = "";
    $disease = "";
    $medicine = "";

    $errorMessage="";
    $successMessage="";

if(isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phonenumber = $_POST['phonenumber'];
  $dateofbirth = $_POST['dateofbirth'];
  $disease = $_POST['disease'];
  $medicine = $_POST['medicine'];
  
  do{
    if (empty($firstname) || empty($lastname) ||empty($phonenumber) ||empty($dateofbirth) ||empty($disease)||empty($medicine)){
    $errorMessage="Fill the required fields";
    break;}

    $sql = "INSERT INTO `efile` (firstname,lastname,phonenumber,dateofbirth,disease,medicine) 
   VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$disease', '$medicine')";
   $res = mysqli_query($conn, $sql);
  
   if (!$res) {
   $errorMessage="Invalid query: " . $conn->error;
   break;
 }

    $firstname = "";
    $lastname = "";
    $phonenumber = "";
    $dateofbirth = "";
    $disease = "";
    $medicine = "";

    $successMessage="filled correctly the efile is saved";

    header("location:/Login-registration-System-PHP-and-MYSQL-master/display.php");
    exit;

  }while(false);
  
  //$sql = "INSERT INTO `efile` (firstname,lastname,phonenumber,dateofbirth,disease,medicine) 
 // VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$disease', '$medicine')";
 // $res = mysqli_query($conn, $sql);
  
 // if ($res) {
  //  echo "Your message was sent successfully!";
  //}else {
  //  echo "Your message could not be sent!";
 // }
  }
  
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EFILE</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

  <div class="wrapper">
    <header>fill efile</header>

    <form  method="post"> 
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="firstname" placeholder="first name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="lastname" placeholder="last name">
          <i class='fas fa-user'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phonenumber" placeholder="mobile">
          <i class='fas fa-phone'></i>
        </div>
        <div class="field">
          <input type="date" name="dateofbirth" placeholder="Date of birth">
          <i class="material-icons">cake</i>
        </div>
      </div>


        <div class="message">
        <textarea placeholder="disease" name="disease"></textarea>
        <i class="material-icons">coronavirus</i>
      </div>
      <div class="message">
        <textarea placeholder="medicine" name="medicine"></textarea>
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
     }
     ?>

      <div class="button-area">
        <button type="submit" name="submit">Save</button>
        <span></span>
      </div>
    </form>
  </div>
</body>
</html>
