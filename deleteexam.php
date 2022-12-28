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
    $dateofbirth = $_POST['dateofbirth'];
    $examtype = $_POST['examtype'];
    $result = $_POST['result'];
 
      $sql = "INSERT INTO exam (firstname,lastname,phonenumber,dateofbirth,examtype,result) 
     VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$examtype', '$result')";
     $res = mysqli_query($conn, $sql);}
      
if(isset($_GET['delete'])) {
    $id=$_GET['delete'];
  
    $sql="DELETE FROM exam WHERE id=$id";
    $result=mysqli_query($conn,$sql)or die($mysqli->error());}
  


header("location:/Login-registration-System-PHP-and-MYSQL-master/displayexam.php");
exit;
    

?>