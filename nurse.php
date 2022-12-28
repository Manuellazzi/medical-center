<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NURSE</title>
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
<br> <br> <br><br>

<h1 class="heading">Nurse <span> menu</span> </h1>

<div class="box-container">
    <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>E-FILES</h3>
        <p>EHR is an electronic version of a patient's medical history include all of the key administrative clinical data relevant to that patient.</p>
        <br>
        <a href="efile.php"><button type="button" class="btn-success">create efiles</button> </a>
   </div>


    <div class="box">
        <i class="fas fa-procedures"></i>
        <h3>PRILIMINARY EXAM</h3>
        <p>A medical examination refers to the procedure of undergoing tests to learn about one's physical condition or for checkup. </p>
        <br>
        <a href="exam.php"><button type="button" class="btn-success">create exam</button> </a>
   </div>

   <div class="box">
        <i class="fas fa-procedures"></i>
        <h3>DISPLAY exam results</h3>
        <p>The doctor can view the exam result of the patient preliminary exam.</p>
        <br>
        <a href="displayexam.php"><button type="button" class="btn-success">create exam</button> </a>
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