<?php
  $connection = mysqli_connect("localhost", "root", "","train",3306);
  if(isset($_POST["submit"]))
  {
    $name = $_POST['name'];
    $email = $_POST['time'];

    
    $sql = "insert into user(name,time)values('$name','$time')";
    if(mysqli_query($connection,$sql))
    {
        echo '<script>location.replace("register.php")</script>';
    }
    else
    {
        echo "Some thing Error" .$connection->error;

    }
    




  }



?>