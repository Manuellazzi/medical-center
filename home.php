<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DOCTOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>


<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

<nav class="navbar">
   
    <a class="acolor" href="logout.php">log out</a>
  
   
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
<section class="services" id="services">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<h1 class="heading">Doctor <span> menu</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>E-FILES</h3>
        <p>EHR is an electronic version of a patient's medical history include all of the key administrative clinical data relevant to that patient.</p>
        <a href="efile.php"><button type="button" class="btn-success">create efile</button> </a>
 </div>
       
    <div class="box">
        <i class="fas fa-pills"></i>
        <h3>PRESCRIPTIONS</h3>
        <p>An instruction to a pharmacist, to dispense a stated quantity of a particular drug in a specified dose.</p>
        <br><br>
        <a href="prescription.php"><button type="button" class="btn-success">create prescription</button> </a>
   </div>

    <div class="box">
        <i class="fas fa-file"></i>
        <h3>FORMS</h3>
        <p>The doctor fill the form of the patient while the visit with some basic questions.</p>
        <br><br>
        <a href="forms.php"><button type="button" class="btn-success">create form</button> </a>
   </div>

   <div class="box">
        <i class="material-icons">medical_information</i>
        <h3>DISPLAY exam results</h3>
        <p>The doctor can view the exam result of the patient preliminary exam.</p>
        <br><br>
        <a href="displayexam.php"><button type="button" class="btn-success">open</button> </a>
   </div>
   <div class="box">
        <i class="material-icons">medical_information</i>
        <h3>DISPLAY e-files</h3>
        <p>The doctor can view the exam result of the patient preliminary exam.</p>
        <br><br>
        <a href="display.php"><button type="button" class="btn-success">open</button> </a>
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