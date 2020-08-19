<html>
<head>
	<meta charset="UTF-8">
	<title>Contact Us - UMULIBRARY</title>
	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
		}

		body{
			font-size: 14px;
		}

		.container{
			width: 80%;
			margin: 50px auto;
		}

		.contact-box{
			background: #fff;
			display: flex;
		}

		.contact-left{
			flex-basis: 60%;
			padding: 40px 60px;
		}

		.contact-right{
			flex-basis: 40%;
			padding: 40px;
			background: #1c00b5;
			color: #fff;
		}

		h1{
			margin-bottom: 10px;
		}

		.container p{
			margin-bottom: 40px;
		}

		.input-row{
			display: flex;
			justify-content: space-between;
			margin-bottom: 20px;
		}

		.input-row .input-group{
			flex-basis: 45%;
		}

		input{
			width: 100%;
			border: none;
			border-bottom: 1px solid #ccc;
			outline: none;
			padding-bottom: 5px;
		}

		textarea{
			width: 100%;
			border: 1px solid #ccc;
			outline: none;
			padding: 10px;
			box-sizing: border-box;
		}

		label{
			margin-bottom: 6px;
			display: block;
			color: #1c00b5;
		}

		button{
			background: #1c00b5;
			width: 100px;
			border: none;
			outline: none;
			color: #fff;
			height: 35px;
			border-radius: 30px;
			margin-top: 20px;
			box-shadow: 0px 5px 15px 0px rgba(28, 0, 200,0.3);
		}

		.contact-left h3{
			color: #1c00b5;
			font-weight: 600;
			margin-bottom: 30px;
		}

		.contact-right h3{
		    font-weight: 600;
			margin-bottom: 30px;
		}

		tr td:first-child{
			padding-right: 20px;
		}

		tr td{
			padding-top: 40px
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


	<div class="container">
		<h1><font color="white">Connect With Us</font></h1>
		<p><font color="white">We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us</font></p>
		<div class="contact-box">
			<div class="contact-left">
				<h3>Send your Request</h3>
				<form>
					
					<div class="input-row">
						<div class="input-group">
							<label>Name</label>
							<input type="text" placeholder="John Amendo">
							
						</div>
						<div class="input-group">
							<label>Phone</label>
							<input type="text" placeholder="+256 787 458 860">
							
						</div>
						
					</div>
					<div class="input-row">
						<div class="input-group">
							<label>Email</label>
							<input type="email" placeholder="benjiryhs@gmail.com">
							
						</div>
						<div class="input-group">
							<label>Course</label>
							<input type="text" placeholder="Bsc General">
							
						</div>
						
					</div>



					<label>Message</label>
					<textarea rows="5" placeholder="Your Message"></textarea>

					<button type="Submit">SEND</button>

				</form>

			</div>
			<div class="contact-right">
				<h3>Reach us</h3>

				<table>
					
					<tr>

						<td><font color="white">Email</font></td>
						<td><font color="white">student-name@stud.umu.ac.ug</font></td>
					</tr>
					<tr>
						<td><font color="white">Phone no.</font></td>
						<td><font color="white">+256 382 410 611</font></td>
					</tr>
					<tr>
						<td><font color="white">Address</font></td>
						<td><font color="white">Uganda Martyrs University,<br>
						 P.O. BOX 5498,<br> 
						 Kampala-Uganda</font></td>
					</tr>
				
				</table>

			</div>
		</div>
	</div>

</body>
</html>