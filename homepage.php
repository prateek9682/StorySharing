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
<title>Homepage</title>
<style>
#main
{
width:100%;
height:100%;
background-image:url('flower.jpg');
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
background-image:url('1.png');
background-repeat:no-repeat;
background-size:100%;
margin-left:5px;
background-color:navy;
}
.option
{
width:100px;
height:30px;
border:0px solid white;
float:left;
margin-left:10px;
color:white;
cursor:pointer;
margin-top:8px;
}
.option:hover
{
	color:blue;
}
#sign
{
width:75px;
height:30px;
border:0px solid white;
float:right;
color:white;
cursor:pointer;
margin-top:8px;
}
#sign:hover
{
color:black;
}	

#story
{
width:1000px;
height:40px;
text-align:left;
font-size:15px;
border-radius:20px 20px 20px 20px;
background-size:120%;
}#story:hover
{
width:1000px;
height:40px;
border:1px solid blue;
text-align:left;
box-shadow:3px 3px 3px black;
border-radius:20px 20px 20px 20px;
font-size:15px;
}

#a
{
width:1000px;
height:30px;
}
#upload
{
width:200px;
height:30px;
float:left;
background-color:grey;
color:white;
margin-top:5px;
padding:5px;
}

#upload:hover
{
float:left;
background-color:brown;
color:white;
margin-top:5px;
cursor:pointer;
box-shadow:4px 4px 4px black;
}

#type
{
width:200px;
height:20px;
float:left;
color:white;
padding-top:10px;
}
#post
{
width:100px;
height:30px;
float:right;
color:white;
background-color:blue;
margin-top:5px;
}
#post:hover
{
width:100px;
height:30px;
float:right;
color:white;
background-color:navy;
margin-top:5px;
cursor:pointer;
box-shadow:4px 4px 4px black;
}
#y
{
overflow:scroll;
height:575px;
}
.x
{
height:650px;
}
.posts
{
width:1000px;
border:1px solid black;
text-align:left;
background-size:100%;
background-image:url('post.jpg');
background-size:400%;
border-radius:5px 5px 5px 5px;
}
.bl
{
width:50px;
height:50px;
border:1px solid black;
border-radius:50px 50px 50px 50px;
float:left;
background-image:url('1.png');
background-repeat:no-repeat;
background-size:100%;
}
.text
{
width:600px;
height:300px;
border:1px solid black;
margin-left:200px;
background-image:url('pic.jpg')
background-size:100%;
}


.like
{
width:600px;
height:30px;
text-align:left;
margin-left:200px;
}
.likes
{
width:30px;
height:30px;
background-image:url('like.png');
background-size:100%;
border-radius:30px 30px 30px 30px;
float:left;
}
.dislikes
{
width:30px;
height:30px;
background-image:url('dislike.png');
border-radius:30px 30px 30px 30px;
background-size:100%;
float:right;
}

.c
{
width:600px;
height:30px;
margin-left:200px;
margin-top:10px;
}
.img
{
width:30px;
height:30px;
border:1px solid black;
border-radius:30px 30px 30px 30px;
float:left;
background-image:url('pp.png');
background-size:100%;
}
.comment
{
width:400px;
height:30px;
border-radius:30px 30px 30px 30px;
}
.comment:hover
{
cursor:pointer;
box-shadow:4px 4px 4px black;
}
.story
{
	color:white;
}

</style>
</head>

<body>
<center>
<div id="main">
<div id="tb">
<div id="tbl"></div>
<a href="homepage.php"><div class="option">HOME</div></a>
<a href="profile.php"><div class="option">PROFILE</div></a>
<a href="setting.php"><div class="option">SETTINGS</div></a>
<a href="profile.php"><div class="option">ABOUT ME</div></a>
<a href="logout.php"><div id="sign">Sign Out</div></a>
</div>
<br><br>
<form action="posts.php" method="POST" enctype="multipart/form-data">
<input id="story" placeholder="     Write your story here........." name="story">
<div id="a">
<input type="file" name="ufile" value="Upload images/videos" id="upload" >
<div id="type">
Video <input type="radio" name="a" value="video">
Image <input type="radio" name="a" value="image">
</div>
<button id="post">POST</button>
</div>
</form>
<hr>
<div id="y">
//first post
<div class="x">
<div class="posts">
<div class="bl"></div>
<br>
&nbsp;&nbsp;<font color="white"size="4"><b><i><?php echo $_SESSION['test']; ?></i></b></font>
<font color="white"size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Updated a picture</font><br><br><br><br>
<div class="text"></div>
<div class="like">
<div class="likes"></div><b>23</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="dislikes"></div><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2</b>
</div>
<div class="c"><div class="img"></div><font size="5"><i><b>Nirbhay</b></i>&nbsp;&nbsp;&nbsp;nice click....</font></div>
<div class="c"><div class="img"></div><font size="5"><i><b>Hacker</b></i>&nbsp;&nbsp;&nbsp;awwsome....</font></div>
<div class="c"><div class="img"></div><font size="5"><i><b>Prateek</b></i>&nbsp;&nbsp;&nbsp;smarty....</font></div>
<div class="c"><div class="img"></div><font size="5"><i><b><?php echo $_SESSION['test']; ?></b></i></font>&nbsp;<input type="text" class="comment" placeholder="     Write a comment.........."></font></div>
<br>
</div>
<br>
</div>


<?php
$msq = mysqli_connect("localhost","root","","formlogin");
$sel = "SELECT * FROM posts";
$q = mysqli_query($msq,$sel);
while($r = mysqli_fetch_array($q))
{
	echo '<div class="x">
			<div class="posts">
			<div class="bl"></div>
			<br>
			&nbsp;&nbsp;<font color="white" size="4"><b><i>'. $r['user'].'</i></b></font>
			<font color="white" size="2"> updated a '.$r['file_type'].'</font>
			<br>
			<div class ="story">'.$r['story'].'</div>
			<br>   
			
				
			<div class ="b"><img class ="text" src="./posts/'.$r['file_name'].'"</div>
			
			
			<div class="like">
			<div class="likes"></div><b>23</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="dislikes"></div><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2</b>
			</div>
			<div class="c"><div class="img"></div><font size="5"><i><b>'.$r['user'].'</b></i></font> <input type="text" class="comment" placeholder="     Write a comment.........."></font></div>
			<br>
			</div>
		</div><br>';
		
}
?>
<?php
}
?>





