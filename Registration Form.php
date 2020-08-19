<!DOCTYPE html>
<html>
<head>
	<title>Library Registration Form</title>
	
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}	

body{
	background-image: url(pexels-stanislav-kondratiev-2908984.jpg);
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin-top: 40px;
}
.regform{
	width: 800px;
	background-color: rgb(0,0,0,0.6);
	margin: auto;
	color: #FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align: center;
	border-radius: 15px 15px 0px 0px;
}

.main{
	background-color: rgb(0,0,0,0.5);
	width: 800px;
	margin: auto;
}

form{
	padding: 10px;
}

#name{
	width: 100%;
	height: 100px;
}

.name{
	margin-left: 25px;
	margin-top: 30px;
	width: 125px;
	color: white;
	font-size: 18px;
	font-weight: 700;
}

.firstname{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
}

.lastname{
	position: relative;
	left: 417px;
	top:-80px;
	line-height: 40px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
}

.firstlabel{
	position: relative;
	color: #E5E5E5;
	text-transform: capitalize;
	font-size: 14px;
	left: 203px;
	top: -45px;
}

.lastlabel{
	position: relative;
	color: #E5E5E5;
	text-transform: capitalize;
	font-size: 14px;
	left: 175px;
	top: -45px;
}

.Course{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	width: 480px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
}

.email{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	width: 480px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
}

.code{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	width: 95px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
}

.number{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	width: 255px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
}

.area-code{
	position: relative;
	color: #E5E5E5;
	text-transform: capitalize;
	font-size: 16px;
	left: 54px;
	top: -4px;
}

.phone-number{
	position: relative;
	color: #E5E5E5;
	text-transform: capitalize;
	font-size: 16px;
	left: -100px;
	top: -2px;
}

.option{
	position: relative;
	left: 200px;
	top: -37px;
	line-height: 40px;
	width: 532px;
	height: 40px;
	border-radius: 6px;
	padding: 0 22px;
	font-size: 16px;
	color: #555;
	outline: none;
	overflow: hidden;
}

.option option{
	font-size: 20px;
}

#student{
	margin-left: 25px;
	color: white;
	font-size: 18px;
}

.radio{
	display: inline-block;
	padding-right: 70px;
	font-size: 25px;
	margin-left:15px;
	color: white;
}

.radio input{
	width: 20px;
	height: 20px;
	border-radius: 50%;
	cursor: pointer;
	outline: none;
}

button{
background: #3BAF9F;
display: block;
margin: 20px 0px 0px 20px;
text-align: center;
border-radius: 12px;
border: 2px solid #366473;
padding: 14px 110px;
outline: none;
color: white;
cursor: pointer;
transition: 0.25px;
}

button:hover{
	background-color: #5390f5;
}


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
	height: 150vh;
	width: 100%;
	background-image: url(4.jpg);
	background-size: cover;
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
	padding-top: 1rem;
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

<div class="regform"><h1>Registration Form</h1></div>
<div class="main">
<form method="post">
		<div id="name">
			<h2 class="name">Name</h2>
		<label class="Firstlabel">First name</label>	<input class="Firstname" type="text" name="Firstname">
			
		<label class="lastlabel">Last name</label>
				<input class="Lastname" type="text" name="Lastname">
			
			
		</div>

<h2 class="name">Course</h2>
<input class="Course" type="text" name="Course">

<h2 class="name">Email</h2>
<input class="email" type="text" name="email">

<h2 class="name">Phone no.</h2>
<input class="code" type="text" name="areacode">
<label class="area-code">Area Code</label>
<input class="number" type="text" name="number">
<label class="phone-number">Phone Number</label>

<h2 class="name">year</h2>
<select class="option" name="year">
	<option disabled="disabled" selected="selected">--Choose Option--</option>
	<option>year 1</option>
	<option>year 2</option>
	<option>year 3</option>

</select>

<h2 id="student">Are you a beginner?</h2>

<label class="radio">
	<input class="radio-one" type="radio" checked="checked" name="beginner">
	<span class="checkmark"></span>
	Yes
</label>
<label class="radio">
	<input class="radio-two" type="radio" name="beginner">
	<span class="checkmark"></span>
	No
</label><br>


	<button name='sub'>ENTER</button>
		
    <?php
  if(isset($_POST['sub'])){
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Course=$_POST['Course'];
$email=$_POST['email'];
$areacode=$_POST['areacode'];
$number=$_POST['number'];
$year=$_POST['year'];
$beginner=$_POST['beginner'];

 $con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
$qry="insert into reg values('$Firstname','$Lastname','$Course','$email','$areacode','$number','$year','$beginner')";
if($res=mysqli_query($con,$qry)){
  echo"<script>alert('Pateint records saved successfully')</script>";
}else{
  echo"<center><font color=red size=16>Records Not saved</font></center>";
}
}?>
 </form>
 </div>
 </div>
</body>
</html>