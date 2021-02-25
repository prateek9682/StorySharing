<?php
$c = $_POST['e'];
$d = $_POST['pa'];
$w = $_POST['fn'];
$x = $_POST['ln'];
$y = $_POST['ph'];
$z = $_POST['dat'];
$g = $_POST['gender'];
$m = mysqli_connect("localhost","root","","formlogin");
$f = "SELECT * from loginpanel WHERE username = '$c'";
$n = mysqli_query($m,$f);
$count = mysqli_num_rows($n);
if($count==0)
{	
	$i="INSERT INTO loginpanel VALUES('','$c','$d','$w','$x','$y','$z','$g')";
	
	mysqli_query($m,$i);
	echo "Welcome $c. 'Your Account is Sucessfully Created'";
}
else
{	
	echo "account already existing with this username please try another username";
}
?>