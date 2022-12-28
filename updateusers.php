<?php
include_once 'db_conn.php';
$id = $_GET["update"];
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users SET  user_name='" . $_POST['user_name'] . "',password='" . $_POST['password'] . "' , name='" . $_POST['name'] . "', 
role='" . $_POST['role'] . "' WHERE id='$id'");
$message = "Record Modified Successfully";
header("location:/Login-registration-System-PHP-and-MYSQL-master/admindisp.php");
    exit;
}

//v $sql="UPDATE efile SET firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',dateofbirth='$dateofbirth',
//disease='$disease',medicine='$medicine' WHERE id=$id"; 
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
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
<header>Update user</header>
<form method="post" action="" style="display: inline-block; ">

<div><?php if(isset($message)) { echo $message; } ?>
</div>


<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<div class="dbl-field">
<div class="field">
<input type="text" name="user_name" value="<?php echo $row['user_name']; ?>">
<i class='fas fa-user'></i></div></div>
<div class="dbl-field"><div class="field">
<input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<i class='fas fa-key'></i></div></div>
<div class="dbl-field">
<div class="field">
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<i class='fas fa-user'></i></div></div>
<div class="dbl-field">
<div class="field">

<select  name = "role" style="width:1150px;" >
           <option option selected ><?php echo $row['role']; ?> </option>
           <option value = "doctor">doctor</option>
            <option value = "nurse">nurse</option>
            <option value = "secretary">secretary</option>
            <option value = "admin">admin</option>
         </select>
</div></div>


<div class="button-area">
    <button type="submit" class="btn btn-danger btn-sm" name="update">save update</button>
      </div>
</form>
</body>
</html>