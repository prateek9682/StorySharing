<?php
session_start();
if(empty($_SESSION['test']))
{
?>
<html>
<head>
<title>Login page</title>
<script src="jquery-3.3.1.min.js"></script>
<style>
#main
{
width:1500px;
height:745px;
background-image:url('1.jpg');
background-size:100%
}
#a1
{
width:670px;
height:633px;
}
.a
{
width:600px;
height:55px;
margin-top:5px;
}
#a2
{
width:670px;
height:633px;
}

#create
{
width:400px;
height:40px;
border:2px solid black;
color:black;
background-color:white;
font-size:30px;
border-radius:6px 6px 6px 6px;
font-family:Forte;
}
#login
{
width:200px;
height:40px;
border:3px solid black;
background-color:white;
font-size:30px;
border-radius:6px 6px 6px 6px;
font-family:Forte;
}
#email
{
width:400px;
height:100px;
margin-top:60px;
border:0px solid black;
color:black;
font-size:40px;
}
#pass
{
width:400px;
height:100px;
margin-top:40px;
color:black;
font-size:40px;
}

#sign
{
width:400px;
height:100px;
margin-top:30px;
}

#s1:hover
{
width:200px;
height:45px;
margin-top:20px;
border-radius:10px 10px 10px 10px;
background-color:skyblue;
border:1px solid navy;
color:white;
font-size:20px;
}
#s1
{
width:200px;
height:45px;
margin-top:20px;
border-radius:10px 10px 10px 10px;
background-color:navy;
border:1px solid navy;
box-shadow:5px 5px 5px black;
color:white;
cursor:pointer;
}
#l1
{
width:300px;
height:40px;
float:left;
color:black;
font-size:40px;
text-align:left;
}

#r1
{
width:300px;
height:40px;
float:right;
}

.i
{
width:300px;
height:40px;
border:3px solid black;
margin-top:5px;
border-radius:5px 5px 5px 5px;
font-size:20px;
color:solidblack;
}



#b:hover
{
width:200px;
height:50px;
border-radius:10px 10px 10px 10px;
box-shadow:0px 0px 0px grey;
background-color:skyblue;
border:1px solid navy;
color:white;
font-size:20px;
}

#b
{
width:200px;
height:50px;
border-radius:10px 10px 10px 10px;
box-shadow:5px 5px 5px grey;
background-color:navy;
border:1px solid navy;
color:white;
cursor:pointer;
}
.j
{
width:400px;
height:40px;
border-radius:5px 5px 5px 5px;
border:2px solid black;
font-size:20px;
color:solid black;
}
#ca
{
cursor:pointer;
}
#aa
{
cursor:pointer;
}
</style>
<script>
function fun()
{
var a=$("#firstname").val();
var b=$("#lastname").val();
var c=$("#ema").val();
var d=$("#password").val();
var e=$("#contact_no").val();
var f=$("#dob").val();
var g=$(".gen").val();
if(a=="")
{
alert("firstname cannot be left blank");
return false;
}
else if(b=="")
{
alert("lastname cannot be left blank");
return false;
}
else if(c=="")
{
alert("Email cannot be left blank");
return false;
}
else if(d=="")
{
alert("password cannot be left blank");
return false;
}
else if(e=="")
{
alert("contact number cannot be left blank");
return false;
}
else if(f=="")
{
alert("date of birth cannot be left blank");
return false;
}
else if(g=="")
{
alert("gender cannot be left blank");
return false;
}
}
function func()
{
var i=$("#Phone").val();
var j=$("#pwd").val();
if(i=="")
{
alert("email cannot be left blank");
return false;
}
else if(j=="")
{
alert("password cannot be left blank");
return false;
}
}
</script>
<script>
$(document).ready(function(){
$("#a2").show();
$("#a1").hide();
$("#ca").click(function(){
$("#a1").fadeIn(2000);
$("#a2").hide(00);
});
$("#aa").click(function(){
$("#a2").fadeIn(2000);
$("#a1").hide(00);
});
});
</script>
</head>
<body>
<form action="login.php" method="POST" onsubmit="return fun();">
<center>
<div id="main">
<div id="a1">
<br><br>
<div id="create">Create your account today</div>
<br><br><br>
<div class="a">
<div id="l1"><i>First Name</div>
<div id="r1"><input type="text" placeholder="First Name"class="i"id="firstname" name="fn"></div>
</div>
<div class="a">
<div id="l1"> <i>Last Name</div>
<div id="r1"><input type="text" placeholder="Last Name"class="i"id="lastname" name="ln"></div>
</div>
<div class="a">
<div id="l1"><i>Email</div>
<div id="r1"><input type="text" placeholder="Email or Phone" class="i"id="ema" name="e"></div>
</div>
<div class="a">
<div id="l1"><i>Password</div>
<div id="r1"><input type="password" placeholder="Password" class="i"id="password" name="pa"></div>
</div>
<div class="a">
<div id="l1"><i>Contact no.</div>
<div id="r1"><input type="text" placeholder="Contact No." class="i"id="contactno" name="ph" ></div>
</div>
<div class="a">
<div id="l1"><i>Date of birth</div>
<div id="r1"><input type="date"class="i"id="dob" name="dat"></div>
</div>
<div id="gen"><br><br><font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Male<input type="radio" name="gender" class="gen" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i>Female</font><input type="radio" name="gender" class="gen" value="female"></div>
<br><br>
<i><a><input type ="submit" value="Create Account" id="b"></a></i>
<br><br><div id="aa"><u>Already have an account?<font color="green"><b>Login</b></font></u></div>
</div>
<div id="a2">
<br>
</form>
<form action="check.php" method ="POST" onsubmit="return func();">
<br><div id="login">Login</div>
<div id="email">Email or Phone<br><input type="text"placeholder="Email or Phone"class="j"id="Phone" name="em"></div><br><br><br>
<div id="pass">Password<br><input type="password"placeholder="Password"class="j"id="pwd" name="pas"></div><br><br><br>
<div id="sign"><input type ="submit" value="Login" id="s1"></a></div>
<input type="checkbox"><font size="4"face="Arial">Keep me signed in</font>
<br><br><u><div id="ca">Create new account?<font color="green"><b>Click here</b></font></div></u>
</div>
</div>
</center>
</form>
</body>
</html>
<?php
}
else
{
	header("location:layout.php");
}
?>