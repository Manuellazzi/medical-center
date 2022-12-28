<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>
<body>


<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

<nav class="navbar">
   
    <a href="logout.php">log out</a>
  
   
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
<section class="services" id="services">
<br>

<h1 class="heading">Admin <span> menu</span> </h1>

<div class="box-container">
    <div class="box">
    <i class="material-icons">attachment</i>
        <h3>manage employees</h3>
        <p>A booking system lets book an appointment with a doctor of your choice filled by the secretary only.</p>
        <br>
        <a href="admindisp.php"><button type="button" class="btn-success">manage </button> </a>
   </div>


    <div class="box">
    <i class="fas fa-file"></i>
        <h3> view statistics</h3>
        <p>Display the booking data of the patients appointment. </p>
        <br>
        <a href="admin2.php"><button type="button" class="btn-success">display</button> </a>
   </div>


</div>
</section>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}

 ?>