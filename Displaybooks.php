<!DOCTYPE HTML>
<html>
<head>
	<title>Displaying Books</title>

	<style type="text/css">

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

html{
	font-size: 18px;
	font-family: "Roboto Cn", sans-serif;
}

body{
	overflow-x: hidden;
	margin: 0;
	padding: 0;
	height: 100%;
	width: 100%;
}

a{
	text-decoration: none;
	color: #eee;
}

header{
	width: 100%;
	height: 100vh;
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
				background-image: url(pexels-min-an-775998.jpg);
			}
			60%{
				background-image: url(pexels-miray-bostancı-3235029.jpg);
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

		<div class="container">
			<nav>
				<h1 class="brand"><a href="Home.html">U<span>M</span>U LIB<span>RAR</span>Y</a></h1>
				<ul>
					<li><a href="Home.html">HOME</a></li>
					<li><a href="Registration Form.html">REGISTRATION</a></li>
					<li><a href="insert-books.html">INSERT BOOK</a></li>
					<li><a href="Search-books.html">SEARCH BOOK</a></li>
				</ul>
			</nav>
		</div>
<center><h2>Simple Library Management System</h2></center>
<br>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>
<center>
<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else{
echo "<center>No books found in the library by the name $search </center>" ;
}
?>
</table>
</center>
</div>
</body>
</html>
<br>