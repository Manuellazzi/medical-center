<?php
include "db_conn.php";

?>


<!DOCTYPE html> 
<html lang="en">
<head>
  <title>DISPLAY EXAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>LIST OF PATIENT PRILIMINARY EXAM</h4>
                    </div>
                    <button class="btn btn-primary"  id="btn_click"> add new exam</button>
<script>
$('#btn_click').on('click', function() { window.location = 'http://localhost/Login-registration-System-PHP-and-MYSQL-master/exam.php'; });
</script>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        
                        <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Phone number</th>
      <th scope="col">Date of birth</th>
      <th scope="col">examtype</th>
      <th scope="col">result</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

                            <tbody>
                                <?php 
                                    $sname= "localhost";
                                    $unmae= "root";
                                    $password = "";
                                    $db_name = "test_db";
                                    
                                    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
                                    

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM exam WHERE CONCAT(firstname,lastname,phonenumber,dateofappoint,examtype,result) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['phonenumber']; ?></td>
                                                    <td><?= $items['dateofbirth']; ?></td>
                                                    <td><?= $items['examtype']; ?></td>
                                                    <td><?= $items['result']; ?></td>
                                                  <td>
                                                   <a href="deleteexam.php?delete=<?php echo $items['id'];?>"
                                                    class="btn btn-danger btn-sm">delete</a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="6">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
 
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Phone number</th>
      <th scope="col">dateofbirth</th>
      <th scope="col">examtype</th>
      <th scope="col">result</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
 
  $result= mysqli_query($conn,"SELECT * FROM exam") or die($mysqli->error);
  // mysqli->query("SELECT * FROM efile")
     while($row=mysqli_fetch_assoc($result)):?>
     <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['firstname'];?></td>
       <td><?php echo $row['lastname'];?></td>
       <td><?php echo $row['phonenumber'];?></td>
       <td><?php echo $row['dateofbirth'];?></td>
       <td><?php echo $row['examtype'];?></td>
       <td><?php echo $row['result'];?></td>
       <td>
     
      <a href="deleteexam.php?delete=<?php echo $row['id'];?>"
      class="btn btn-danger btn-sm">delete</a>
      
       </td>
      </tr>
     <?php endwhile; ?>
     <?php
  
  ?>
  
  </tbody>
</table>
</div>
</body>
</html>