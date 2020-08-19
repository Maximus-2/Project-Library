<html>

<head>
  <meta charset="UTF-8">
  
   <title>LOGIN</title>

     <link rel="stylesheet" href="style.css">
</head>

<body>
 <form method="post">
  <div class="wrapper">

    <h1>Log in</h1>
        name: <input type="text" name="name" placeholder="Enter name" required><br>
      password: <input type="password" name=" password" placeholder=" Password" required><br>

       <center><button name="sub">Log in</button> </center>
  
       
      <a href="index.php">SIGN up</a>    
        </div>

<?php
 $con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
    
  
       if(isset($_POST['sub'])){
       $name = ($_REQUEST['name']);
       $password = ($_REQUEST['password']);



        $query = "SELECT * FROM `login` WHERE name='$name' and password='$password'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);


        if($rows==1){
      $_SESSION['name'] = $name;
      $_SESSION['password'] = $password;


      
        setcookie('id', 'cokiesa', time() + (86400 * 2), "/");
      header("Location:Home.php"); // Redirect user to Doctors.php
            }
            

      else{
        echo "<div id='body'><h3><center><font color=red size=8>Details  are incorrect.</font></center></h3><br/><center></div>";
        }
       }
?>

  </div>
  </form>
</body>
   
</html>	