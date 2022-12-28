<?php
include_once 'db_conn.php';
$id = $_GET["update"];
if(count($_POST)>0) {

mysqli_query($conn,"UPDATE efile SET firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', phonenumber='" . $_POST['phonenumber'] . "', 
dateofbirth='" . $_POST['dateofbirth'] . "' ,disease='" . $_POST['disease'] . "',medicine='" . $_POST['medicine'] . "' WHERE id='$id'");
$message = "Record Modified Successfully";
header("location:/Login-registration-System-PHP-and-MYSQL-master/display.php");
    exit;
}
 
//v $sql="UPDATE efile SET firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',dateofbirth='$dateofbirth',
//disease='$disease',medicine='$medicine' WHERE id=$id"; 
$result = mysqli_query($conn,"SELECT * FROM efile WHERE id='$id'");
$row= mysqli_fetch_array($result);
?>
<html>
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
<form method="post" action="">

<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="dbl-field">
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

<div class="field">
<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
<i class='fas fa-user'></i></div>
<div class="field">
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<i class='fas fa-user'></i></div></div>
<div class="dbl-field">
<div class="field">
<input type="number" name="phonenumber" class="txtField" value="<?php echo $row['phonenumber']; ?>">
<i class='fas fa-phone'></i></div>
<div class="field">
<input type="date" name="dateofbirth" class="txtField" value="<?php echo $row['dateofbirth']; ?>">
<i class="material-icons">event_note</i></div></div>
<div class="dbl-field"><div class="field">
<input type="text" name="disease" class="txtField" value="<?php echo $row['disease']; ?>">
<i class="material-icons">coronavirus</i>
</div></div>
<div class="dbl-field">
<div class="field">
<input type="text" name="medicine" class="txtField" value="<?php echo $row['medicine']; ?>">
<i class="material-icons">medication</i></div></div><br>
<div class="button-area">
    <button type="submit" class="btn btn-danger btn-sm" name="update">save update</button>
      </div>
</form>
</body>
</html>