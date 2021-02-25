<?php
session_start();
$user = $_SESSION['test'];
$story = $_POST['story'];
$file = $_FILES['ufile'];
$ftype = $_POST['a'];
$file_new = $file["name"];

$m = mysqli_connect("localhost","root","","formlogin");
$move = move_uploaded_file($file["tmp_name"],"posts/$file_new");
$ins = "INSERT INTO posts VALUES('','$story','$ftype','$file_new','$user')";
$msq = mysqli_query($m,$ins);
header("location:homepage.php");	
?>