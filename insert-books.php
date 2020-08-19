<!DOCTYPE HTML>
<html>
<head>
	
<title>Insert Books</title>

<style type="text/css">
	
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

html{
	font-size: 16px;
	font-family: "Roboto Cn", sans-serif;
}

body{
	overflow-x: hidden;
}

.regform{
	width: 650px;
	background-color: rgb(0,0,0,0.8);
	margin: auto;
	color: #FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align: center;
	border-radius: 15px 15px 0px 0px;
}

a{
	text-decoration: none;
	color: #eee;
}

header{
	width: 100%;
	height: 30vh;
}

.container{
	max-width: 120rem;
	width: 100%;
	margin: 8 auto;
	background-color: rgb(0,0,0,0.6);
	color: #FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align: center;
}

.container1{
	height: 100vh;
	width: 100%;
	background-image: url(4.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	transition: 8s;

	animation-name: animate;
	animation-direction: alternate-reverse;
	animation-duration: 30s;
	animation-fill-mode: forwards;
	animation-iteration-count: infinite;
	animation-play-state: running;
	animation-timing-function: ease-in-out;
}


@keyframes animate{
			0%{
				background-image: url(pexels-janko-ferlic-590493.jpg);
			}
			20%{
				background-image: url(pexels-min-an-694740.jpg);
			}
			40%{
				background-image: url(2.jpg);
			}
			60%{
				background-image: url(pexels-pixabay-159832.jpg);
			}
			80%{
				background-image: url(pexels-pixabay-159711.jpg);
			}
			100%{
				background-image: url(pexels-christina-morillo-1181571.jpeg);
			}
		}


nav{
	padding-top: 5rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	font-size: 1.6rem;
}

.brand{
	font-size: 3rem;
	font-weight: 300;
	transform: translateX(-100rem);
	animation: slideIn .5s forwards;
}

.brand span{
	color: crimson;
}

nav ul{
	display: flex;
}

nav ul li{
	list-style: none;
	transform: translateX(100rem);
	animation: slideIn .5s forwards;
}

nav ul li:nth-child(1){
	animation-delay: 0s;
}

nav ul li:nth-child(2){
	animation-delay: 0.5s;
}

nav ul li:nth-child(3){
	animation-delay: 1s;
}

nav ul li:nth-child(4){
	animation-delay: 1.5s;
}

nav ul li a{
	padding: 1rem 0;
	margin: 0 2rem;
	position: relative;
	letter-spacing: 2px;
}

nav ul li a:last-child{
	margin-right: 0;
}

nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: crimson;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}

nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}

nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}

@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}



</style>

</head>
<body>
	<div class="container1">

	<header>
		<div class="container">
			<nav>
				<h1 class="brand"><a href="Home.php">U<span>M</span>U LIB<span>RAR</span>Y</a></h1>
				<ul>
					<li><a href="Registration Form.php">REGISTRATION</a></li>
					<li><a href="insert-books.php">INSERT BOOK</a></li>
					<li><a href="Search-books.php">SEARCH BOOK</a></li>
					<li><a href="ContactUs.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

<center><h2><font color="white">INSERT BOOK</font></h2>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form class="regform" method="post">

<table border="2" align="center" cellpadding="10" cellspacing="10">
<tr>
<td> Enter ISBN :</td>
<td> <input type="text" name="isbn" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<tr>
<td>Upload File<form action="upload.php" method="post" enctype="multipart/form-data"></td>
 <td> <input type="file" name="file" id="upload"></td></tr></form>
<br><br>
<tr><td></td>
<td><button name='sub'>Save</button>
</td>
</tr>
</table>
</form>
</center>
</div>




    <?php
  if(isset($_POST['sub'])){
$isbn=$_POST['isbn'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publication=$_POST['publication'];
$file=$_POST['file'];


$con=mysqli_connect("localhost","root","","lib");

$qry="insert into book values('$isbn','$title','$author','$edition','$publication','$file')";

if($res=mysqli_query($con,$qry)){
  echo"<script>alert('Pateint records saved successfully')</script>";
}else{
  echo"<center><font color=red size=16>Records Not saved</font></center>";
}
}?>



</body>
</html>