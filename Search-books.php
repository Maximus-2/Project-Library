<!DOCTYPE HTML>
<html>

<head>
	
<title>Search Books</title>

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
	
<center><h2><font color="white">SEARCH BOOKS</font></h2></center>

<form action = "DisplayBooks.php" method="get">

<br>
<center><font color="white">Enter the title of the book to be searched :</font>
<input type="text" name="search" size="48">
<br></br>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</center>
<br>
</form>
</div>
</body>
</html>