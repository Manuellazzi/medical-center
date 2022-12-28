<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM efile");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Phone number</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Disease</th>
      <th scope="col">Medicine</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	   <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['firstname'];?></td>
       <td><?php echo $row['lastname'];?></td>
       <td><?php echo$row['phonenumber'];?></td>
       <td><?php echo$row['dateofbirth'];?></td>
       <td><?php echo$row['disease'];?></td>
       <td><?php echo$row['medicine'];?></td>
       
		<td><a href="update2.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
