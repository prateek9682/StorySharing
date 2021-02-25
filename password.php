<?php
SESSION_START();
$a=$_SESSION['test'];
$b=$_POST['op'];
$x=$_POST['np'];
$y=$_POST['rp'];
$c=mysqli_connect("localhost","root","","formlogin");
$d="SELECT * FROM loginpanel WHERE username='$a' AND password='$b'";
$e=mysqli_query($c,$d);
$count=mysqli_num_rows($e);
if($count==1)
{	
	if($x==$y)
	{
			
			echo "ready";
	}
	else
	{
		echo "Re-enter correct password";
	}
}
else
{
	echo "old password not matched";
}
?>