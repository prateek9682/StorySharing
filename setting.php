<?php
SESSION_START();
if(empty($_SESSION['test']))
{
	header("location:index.php");
}
else
{
?>
<html>
<head>
<title>SETTINGS</title>
<script src="jquery-3.3.1.min.js"></script>
<style>
#back
{
width:1500px;
height:745px;
background-image:url('pro16.jpg');
background-size:100%;
background-repeat:no-repeat;
}
#main
{
width:1500px;
}
#tb
{
width:1500px;
height:35px;			
text-align:left;
background-color:rgba(0,0,0,0.2);
position:absolute;
}
#tbl
{
width:30px;
height:30px;
border:1px solid white;
border-radius:30px 30px 30px 30px;
float:left;
background-image:url('pp.png');
background-repeat:no-repeat;
background-size:100%;
margin-left:5px;
}
#sign
{
width:75px;
height:20px;
border:0px solid white;
float:right;
color:white;
cursor:pointer;
margin-top:7px;
}
#sign:hover
{
color:black;
}
.option
{
width:85px;
height:20px;
float:left;
margin-left:10px;
color:white;
cursor:pointer;
margin-top:7px;
}
.option:hover
{
color:black;
}
#password
{
width:550px;
height:80px;
margin-top:30px;
text-align:left;
border-radius:10px 10px 10px 10px;
}
#new
{
width:550px;
height:80px;
margin-top:50px;
text-align:left;
border-radius:10px 10px 10px 10px;
}
#submit
{
width:150px;
height:50px;
margin-top:35px;
text- align:center;
font-size:20px;
background-color:green;
border:1px solid green;
border-radius:10px 10px 10px 10px;
}
#submit:hover
{
background-color:brown;
width:170px;
height:55px;
cursor:pointer;
font-size:30px;
color:white;
box-shadow:2px 2px 2px  white;

}
#reenter
{
width:550px;
height:80px;
margin-top:60px;
text-align: left; 
border-radius:10px 10px 10px 10px;
}
.i
{
width:250px;
height:40px;
border:2px solid black;
border-radius:5px 5px 5px 5px;
}
#setting
{
width:450px;
height:40px;
margin-top:20px;
}
#x
{

height:577px;
}

</style>
<script>

function fun ()
{
var a=$("#n").val();
var b=$("#m").val();
var c=$("#l").val();
if(a=="")
{
alert("Old Password cannot be left blank");
return false;
}
else if(b=="")
{
alert("New Password cannot be left blank");
return false;
}
else if(c=="")
{
alert("Re-Enter your Password");
return false;
}
}
</script>
</head>
<body>
<center>
<form action="password.php" onsubmit="return fun();" method="POST">
<div id="back">
<div id="main">
<div id="tb">
<div id="tbl"></div> 	
<a href="homepage.php"><div class="option">HOME</div></a>
<a href="profile.php"><div class="option">PROFILE</div></a>
<a href="setting.php"><div class="option">SETTINGS</div></a>
<a href="logout.php"><div id="sign">Log Out</div></a>
</div>
<br><br>
</div>
<div id="x">
<div id="setting"><font size="7"face="Brush Script MT"color="Brown"><b>Change Your Password</font></u></b></div>
<br>
<div id="password"><font size="5"><br><i><b>Old Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" class="i"id="n" name="op"></b></i></font></div>
<div id="new"><font size="5"><br><i><b>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="i"id="m" name="np"></b></i></font></div>
<div id="reenter"><font size="5"><br><i><b>Re-Enter  Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" class="i"id="l" name="rp"></b></i></font></div>
<button id="submit">submit</button>
<br>
</div>
</div>
</div>
</center>
</form>
</body>
</html>
<?php
}
?>