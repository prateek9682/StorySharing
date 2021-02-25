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
<script src="jquery-3.3.1.min.js"></script>
<style>
#big
{
 width:1500px;
 height:746px;
 background-image:url('pro13.jpg');
 background-size:100%;
 border:1px solid black;
}
#upper
{
 width:1500px;
 height:150px;
 background-image:url('bg.jpg');
 background-size:1%;
 box-shadow:1px 1px 1px black;
}
#c
{
width:1500px;
overflow:scroll;
height:600px;
float:left;
}
#pic
{
 width:150px;
 height:180px;
 border:1px solid black;
 border-radius:100% 100% 100% 100%;
 background-image:url('pro11.jpg');
 background-size:100% 100%;
 margin-left:230px;
 margin-top:50px;
 box-shadow:1px 1px 1px 1px;
 position:absolute;
 
}

#page
{
 width:600px;
 height:570px;
 border:1px solid black;
 border-radius:10px 10px 10px 10px;
 background-image:url('pro17.jpg');
 background-size:100%;
 margin-left:650px;
 margin-top:15px;
 box-shadow:2px 2px 2px grey;
 float:top;
}

#menu
{
 width:700px;
 height:60px;
 margin-top:85px;
 margin-left:400px;
 float:left; 
}
#ch
{
 width:100px;
 height:53px;
 border:1px solid black;
 text-align:center;
 padding-top:10px;
 font-size:20px;
 color:white;
 float:left;
}


#in
{
 width:596px;
 height:60px;
 border:1px solid black;
 float:left;
}
.logout
{
 width:100px;
 height:25px;
 background-color:skyblue;
 text-align:center;
 padding:10px;
 font-size:20px;
 color:white;
 font-family:calibri;
 border-radius:5px 5px 5px 5px;
 box-shadow:5px 5px 5px grey;
 cursor:pointer;
 margin-left:10px;
 margin-top:70px;
 margin-right:20px;
 float:right;
}
.logout:hover
{
box-shadow:0px 0px 0px grey;
background-color:grey;
}
#a
{
 width:300px;
 height:50px;
 border:1px solid black;
}

#b
{ 
 width:300px;
 height:50px;
 border:1px solid black;
 margin-right:200px;
}

#button
{ 
 width:200px;
 height:40px;
 margin-right:200px;
background-color:green;
}

#about
{ 
 width:390px;
 height:450px;
 box-shadow:0px 0px 0px 0px grey;
 text-align: center;
 font-size:20px;
 color:black;
 margin-top:120px;
  margin-left:150px;
 float:left;
 background-image:url('pro17.jpg');
}
.abc:hover
{
 color:black;
}
.abc
{
 width:60px;
 height:45px;
 text-align:center;
 font-size:20px;
 color:white;
 padding-top:20px;
 padding-left:130px;
 float:left;
cursor:pointer;
}
.input:hover
{
width:300px;
height:50px;
border:1px solid blue;
text-align:left;
box-shadow:3px 3px 3px black;
border-radius:20px 20px 20px 20px;
font-size:30px;
}

.input
{
width:300px;
height:40px;
text-align:left;
font-size:20px;
border-radius:20px 20px 20px 20px;
}
#button:hover
{
width:200px;
height:50px;
border:1px solid black;
text-align:left;
box-shadow:3px 3px 3px green;
border-radius:20px 20px 20px 20px;
font-size:30px;
text-align:center;
background-color:grey;
}

#button
{
width:200px;
height:50px;
border:1px solid blue;
text-align:left;
box-shadow:3px 3px 3px black;
border-radius:20px 20px 20px 20px;
font-size:30px;
text-align:center;
background-color:green;
margin-left:200px;
}
</style>
<script>
function fun()
{
var a=$("#full").val();
var b=$("#contact").val();
var c=$("#email").val();
if(a=="")
{
alert("Name cannot be left blank");
return false;
}
else if(b=="")
{
alert("contact no. cannot be left blank");
return false;
}
else if(c=="")
{
alert("Email cannot be left blank");
return false;
}
}
</script>
</head>
<body>
<form action="check.php" onsubmit="return fun();">
<div id="big">
<div id="upper">
<div id="menu">
<a href="homepage.php"><div class="abc">HOME</div></a>
<div class="abc">PROFILE</div>
<a href="setting.php"><div class="abc">SETTINGS</div></a>
</div>
<a href="logout.php"><div class="logout">Logout</div></a>
<div id="pic"></div>
</div>
<div id="c">
<div id="about"><font size="8" color="brown" face="Brush Script MT"><b>About Me</b></font>
<br><br><br><br>
<font size="5" face="Forte">
Name : prateek gupta<br><br>
Birthday : 16 June<br><br>
Departments : IT Departments<br><br>
Supervisor : Alex Boston
</font>
</div>
<div id="page"><center>
<br>
<font size="5" color="brown" face="Brush Script MT"><b>This information will be displayed publically on your profile</b></font>
<br><br><br>
<font size="5"><b>Enter Your Full Name</b></font><br>
<input type="text"Placeholder="Enter your name" class="input" id="full"><br><br><br>
<font size="5"><b>Contact No.</b></font><br>
<input type="text"placeholder="Contact No." class="input" id="contact"><br><br><br>
<font size="5"><b>Your Email Id</b></font><br>
<input type="text"placeholder="Email Id" class="input" id="email"><br><br><br><br>
<input type="submit"id="button">
</div>
<br><br>
</div>
</div>
</form>
<body>
</html>
<?php
}
?>