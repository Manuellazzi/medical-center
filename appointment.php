<?php 
include "db_conn.php";
$firstname = "";
$lastname = "";
$phonenumber ="";
$doctor = "";
$dateofappoint = "";
$time = "";

$errorMessage="";
$successMessage="";

if(isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phonenumber = $_POST['phonenumber'];
  $doctor = $_POST['doctor'];
  $dateofappoint = $_POST['dateofappoint'];
  $time = $_POST['time'];
  
  do{
    if (empty($firstname) || empty($lastname) ||empty($phonenumber) ||empty($doctor) ||empty($dateofappoint)||empty($time)){
    $errorMessage="Fill the required fields";
    break;}

  $sql = "INSERT INTO appointment (firstname,lastname,phonenumber,doctor,dateofappoint,time) 
  VALUES('$firstname', '$lastname','$phonenumber','$doctor', '$dateofappoint', '$time')";
  $res = mysqli_query($conn, $sql);
  
  if (!$res) {
    $errorMessage="Invalid query: " . $conn->error;
    break;
  }
 
     $firstname = "";
     $lastname = "";
     $phonenumber = "";
     $doctor = "";
     $dateofappoint = "";
     $time = "";
 
     $successMessage="filled correctly the efile is saved";
 
     header("location:/Login-registration-System-PHP-and-MYSQL-master/displayapp.php");
     exit;
 
   }while(false);
}
?>



<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPOINTMENT</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
      .box { border: 0.7px solid grey;
    display: block;
    width: 100%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

.box:hover{border:2px solid #16a085;}
  
    </style>
</head>
<body>

  <div class="wrapper">
    <header>Book an appointment</header>
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

        <div class="field">
          <input type="text" name="phonenumber" placeholder="mobile">
          <i class='fas fa-phone'></i>
        </div>
      </div>
      <div class="field">
        <select class="box"  name ="doctor"> 
             <option disabled selected>---Select a doctor---</option>
             <option>Jessy psy</option>
             <option>Jack wang</option>
             <option>Ecric nam</option>
             <option>Jessy psy</option>
             <option>Jack wang</option>
             <option>Ecric nam</option>   
            </select>
      </div>

        <div class="field">
          <input type="date" name="dateofappoint" placeholder="Date of appointement">
          <i class="material-icons"></i>
        </div>


      <div class="field">
          <input class="longofit" type="time" name="time" placeholder="time">
          <i class="material-icons">time</i>
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
        <button type="submit" name="submit">Save</button>
      </div>
    </form>
  </div>
</body>
</html>