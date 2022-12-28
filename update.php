<?php
include "db_conn.php";
$id='';
$firstname='';
$lastname='';
$phonenumber='';
$dateofbirth='';
$disease='';
$medicine='';
$saveupdate=false;

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name)or die(mysqli_error($mysqli));


    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $dateofbirth = $_POST['dateofbirth'];
        $disease = $_POST['disease'];
        $medicine = $_POST['medicine'];
        
  
      
         $sql = "INSERT INTO efile (firstname,lastname,phonenumber,dateofbirth,disease,medicine) 
         VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$disease', '$medicine')";
         $res = mysqli_query($conn, $sql);}
         


         if(isset($_GET["update"])){
           $id = $_GET["update"];
           $saveupdate=true;
           $sql="SELECT * FROM efile WHERE id=$id";
           $result=mysqli_query($conn,$sql);
           
            $row=mysqli_fetch_assoc($result);
            $firstname=$row["firstname"];
            $lastname=$row["lastname"];
            $phonenumber=$row["phonenumber"];
            $dateofbirth=$row["dateofbirth"];
            $disease=$row["disease"];
            $medicine=$row["medicine"];}

            if(isset($_POST['saveupdate'])){
                $id = $_POST['id'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phonenumber = $_POST['phonenumber'];
                $dateofbirth = $_POST['dateofbirth'];
                $disease = $_POST['disease'];
                $medicine = $_POST['medicine'];
                
                $sql="UPDATE efile SET firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',dateofbirth='$dateofbirth',
                disease='$disease',medicine='$medicine' WHERE id=$id"; 
               
               $result=mysqli_query($conn,$sql)or die($mysqli->error());
               
        }
        ?>
<!DOCTYPE html>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>UPDATE EFILE</title>
      <link rel="stylesheet" href="style1.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        </head>
        <body>
        <div class="wrapper">
        <header>Update efile</header>
        <form action="display.php" method="post"> 
       <div class="dbl-field">
        <input type="hidden" name="id" value="<?php echo $id?>">
          <div class="field">
            <input type="text" name="firstname" placeholder="first name" value="<?php echo $firstname?>">
            <i class='fas fa-user'></i>
          </div>
          <div class="field">
            <input type="text" name="lastname" placeholder="last name" value="<?php echo $lastname?>">
            <i class='fas fa-user'></i>
          </div>
      </div>
      <div class="dbl-field">
          <div class="field">
            <input type="text" name="phonenumber" placeholder="mobile" value="<?php echo $phonenumber?>">
            <i class='fas fa-phone'></i>
          </div>
          <div class="field">
            <input type="date" name="dateofbirth" placeholder="Date of birth" value="<?php echo $dateofbirth?>">
            <i class="material-icons">event_note</i>
          </div>
        </div>

        <div class="dbl-field">
          <div class="field">
          <input type="text" name="disease" placeholder="disease" value="<?php echo $disease?>">
          <i class="material-icons">coronavirus</i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="medicine" placeholder="medicine" value="<?php echo $medicine?>">
          <i class="material-icons">medication</i>
        </div>
      </div>
        <?php
     if ($saveupdate==true); ?>

    <div class="button-area">
    <button type="submit" class="btn btn-danger btn-sm" name="update">save update</button>
      </div>
      </div>
        </body>
</html>
