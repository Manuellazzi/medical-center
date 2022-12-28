<?php


$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name)or die(mysqli_error($mysqli));


    if(isset($_POST['submit'])){

        
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phonenumber = $_POST['phonenumber'];
  $doctor = $_POST['doctor'];
  $dateofappoint = $_POST['dateofappoint'];
  $time = $_POST['time'];
      
  $sql = "INSERT INTO appointment (firstname,lastname,phonenumber,doctor,dateofappoint,time) 
  VALUES('$firstname', '$lastname','$phonenumber','$doctor', '$dateofappoint', '$time')";
  $res = mysqli_query($conn, $sql);}

if(isset($_GET['delete'])) {
    $id=$_GET['delete'];
  
    $sql="DELETE FROM appointment WHERE id=$id";
    $result=mysqli_query($conn,$sql)or die($mysqli->error());}
  


header("location:/Login-registration-System-PHP-and-MYSQL-master/displayapp.php");
exit;
    

?>