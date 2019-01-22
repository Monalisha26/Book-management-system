<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($k=1;$k<=$size;$k++)
{
$q="delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Deletion</title>
 </head>
 <body>
 <h1>Book Record Management</h1>
 <p><?php 
	 echo $size." Record Deleted"; 
 ?>
 </p>
 Do you want to go back to homepage?<a href="home.php">Click here</a>
 </body>
 </html>