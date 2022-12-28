<?php 
include "db_conn.php";

    $firstname = "";
    $lastname = "";
    $phonenumber = "";
    $dateofbirth = "";
    $examtype = "";
    $result = "";

    $errorMessage="";
    $successMessage="";

if(isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phonenumber = $_POST['phonenumber'];
  $dateofbirth = $_POST['dateofbirth'];
  $examtype = $_POST['examtype'];
  $result = $_POST['result'];
  
  do{
    if (empty($firstname) || empty($lastname) ||empty($phonenumber) ||empty($dateofbirth) ||empty($examtype)||empty($result)){
    $errorMessage="Fill the required fields";
    break;}

    $sql = "INSERT INTO exam (firstname,lastname,phonenumber,dateofbirth,examtype,result) 
   VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$examtype', '$result')";
   $res = mysqli_query($conn, $sql);
  
   
   if (!$res) {
    $errorMessage="Invalid query: " . $conn->error;
    break;
  }
 
  $firstname = "";
  $lastname = "";
  $phonenumber = "";
  $dateofbirth = "";
  $examtype = "";
  $result = "";
 
     $successMessage="filled correctly the efile is saved";
 
     header("location:/Login-registration-System-PHP-and-MYSQL-master/displayexam.php");
     exit;
 
   }while(false);

 }

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRELIMINARY EXAM</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
      .box {
    display: block;
width: 100%;
padding: 10px;
margin: 10px auto;
border-radius: 5px;
border-width: 0.3mm;
border-color: rgb(176, 175, 175);
}

.box:hover{border:2px solid #16a085;}
  
    </style>
</head>
<body>

  <div class="wrapper">
    <header>fill priliminary exam</header>

    <form   method="post"> 
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
        </div></div>
        <div class="dbl-field">
        <div class="field">
          <input type="date" name="dateofbirth" placeholder="Date of birth">
          <i class="material-icons">cake</i>
        </div>
  </div>
    <div class="field">
               <select class="box"  name ="examtype"> 
               <option disabled selected>---Select exam type---</option>
            <option value = "physical test">physical test</option>
            <option value = "lab test">lab test</option>
            <option value = "cancer test">cancer test</option>
         </select>
          </div>  
         
 

      <div class="message">
        <textarea placeholder="exam result" name="result"></textarea>
        <i class="material-icons">monitor_heart</i>
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