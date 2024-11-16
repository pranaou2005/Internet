<?php
 $connection = mysqli_connect("localhost","root","","ecommerce",3306);
 if(isset($_POST["submit"])){
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $sql = "select * from user where name='$username' and password='$password'";
  if(mysqli_query($connection,$sql)){
    echo '<script>location.replace("home.html"); alert ("logged in successfully");</script>';
  }
  else{
    echo "something went wrong".$connection->error;
  }
 }
?>


<html>
    <head>
        <title>The login form</title>
        <style>
            body{
                width: 100%;
                background-color:lightgreen;
                font-family:"arial";
            }
        </style>
    </head>
    <body>
    <h1>The login page</h1>
                            <br>
                            <br>
    <form method='post' action='login.php'>
        Username: <input type='text' name='uname' required><br>
        Password: <input type='password' name='pass' required><br>
        <input type='submit' value='Submit' name="submit">
    </form>
    </body>
</html>