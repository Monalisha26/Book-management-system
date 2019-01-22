<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
 <title>View Book Record</title>
 <link rel="stylesheet" href="viewstyle.css">
 </head>
 <body>
 <h1>Book Record Management</h1>
 <table id="library">
 <tr>
  <th>Book Id</th>
  <th>Title</th>
  <th>Price</th>
  <th>Author</th>
 </tr>
 <?php
  for($i=0;$i<=$num;$i++)
  {
	  $row=mysqli_fetch_array($result); 
 ?>
 <tr>
    <td><?php echo $row['bookid'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><?php echo $row['author'];?></td>
 </tr>
 <?php
  }
  ?>
 </table>
 </body>
</html>