<?php
 $connection = mysqli_connect("localhost","root","","ecommerce",3306);
 if(isset($_POST["submit"])){
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $sql = "insert into user(name,password)values('$username','$password')";
  if(mysqli_query($connection,$sql)){
    echo '<script>location.replace("home.html"); alert ("regsitered successfully");</script>';
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
    <body style="color:black;">
    <h1>The registration page</h1>
                            <br>
                            <br><center>
    <fieldset style="background-color:rgb(10,55,90);">
    <legend style="color:yellow;padding:50px">Personal info</legend>
    <form method='post' action='register.php' style="color:white;">
        Username: <input type='text' name='uname' required><br><br><br>
        Password: <input type='password' name='pass' required><br><br><br>
        <input type='submit' value='Submit' name="submit">
    </form>
          </center>
          </fieldset>
    </body>
</html>