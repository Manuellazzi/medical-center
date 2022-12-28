<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>
      .box {
          display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
	border-radius: 5px;
	box-shadow: 1px 1px #ccc;
      }
    </style>
  </head>
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
          <?php if (isset($_GET['password'])) { ?>
     	<input type="password" 
                 name="password" 
                 placeholder="Password">
                 value="<?php echo $_GET['password']; ?>"><br>
          <?php }else{ ?>
               <input type="password" 
                      name="password" 
                      placeholder="Password"><br>
          <?php }?>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>


          <label>Role</label><br>
          <?php if (isset($_GET['role'])) { ?>
          
               <select class="box" name = "role"> 
               <option disabled selected>---Select your role---</option>
            <option value = "doctor">doctor</option>
            <option value = "nurse">nurse</option>
            <option value = "secretary">secretary</option>
            <option value = "admin">admin</option>
         </select>
                      value="<?php echo $_GET['role']; ?>"><br>
          <?php }else{ ?>
               
               <select  class="box" name = "role"> 
               <option disabled selected>---Select your role---</option>
            <option value = "doctor" >doctor</option>
            <option value = "nurse">nurse</option>
            <option value = "secretary">secretary</option>
            <option value = "admin">admin</option>
           
         </select><br>
          <?php }?>       

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>