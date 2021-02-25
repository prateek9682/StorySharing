<?php
$a=$_POST['em'];
$b=$_POST['pas'];
$c=mysqli_connect("localhost","root","","formlogin");
$d="SELECT * FROM loginpanel WHERE username='$a' AND password='$b'";
$e=mysqli_query($c,$d);
$count=mysqli_num_rows($e);
if($count==1)
{	SESSION_START();
	$_SESSION['test']=$a;
	header("location:homepage.php");
}
else
{
	header("location:index.php");
}
?>