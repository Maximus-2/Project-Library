<html>

<head>
  <meta charset="UTF-8">
  
   <title>SIGN UP</title>

     <link rel="stylesheet" href="style.css">
</head>

<body>
 <form method="post">
  <div class="wrapper">
    <h1>Sign up</h1>

     name: <input type="text" name="name" placeholder="Enter name" required><br>
      password: <input type="password" name=" password" placeholder=" Password" required><br>
      email:<input type="text" name="email" placeholder="Enter email" required><br>
      <center><button name="sub">save</button> </center>
    
      
      <a href="login.php">LOG IN</a>    
        </div> </div>
 
   <?php
 $con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
   
  if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $password=$_POST['password'];
  $email=$_POST['email'];
 
  $qry="insert into login values('$name','$password','$email')";
 
if($res=mysqli_query($con,$qry)){
//if (file_exists('$name', '$email'))
 //{    
     //   echo 'file found!';
 //} 

 
    echo"<script>alert('Records successfully saved')</script>"; header("Location: login.php");
  }else{
  echo"<center><font color=red size=15>Data Has not been saved</font></center>";}
  
  }
?>

  ?>

</body>
</html>