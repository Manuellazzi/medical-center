<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SECRETARY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

<h1 class="heading">Secretary <span> menu</span> </h1>

<div class="box-container">
    <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>APPOINTEMENT</h3>
        <p>A booking system lets book an appointment with a doctor of your choice filled by the secretary only.</p>
        <br>
        <a href="appointment.php"><button type="button" class="btn-success">create appoint</button> </a>
   </div>


    <div class="box">
        <i class="fas fa-file"></i>
        <h3>DISPLAY APPOINTEMENT</h3>
        <p>Display the booking data of the patients appointment. </p>
        <br>
        <a href="displayapp.php"><button type="button" class="btn-success">display</button> </a>
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