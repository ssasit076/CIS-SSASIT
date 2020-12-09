<?php
$email = filter_input(INPUT_POST, 'email');
$pass =filter_input(INPUT_POST, 'pass');
if (!empty($email))
{
  if (!empty($pass))
  {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hack";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) 
    {
       die("Connection failed: " . $conn->connect_error);
    }
       $sql = "SELECT * FROM db1 where email='$email' && pass='$pass'";
       $result =mysqli_query($conn,$sql) or die(mysqli_error());
       $rows=mysqli_num_rows($result);
        if($rows==1)
        {
            echo '<script>alert("Login Successfully");location="templet.html";</script>';
            //echo '<script>location="new.html";</script>';
            //header("Location:new.html");
            
            
        }else
        {
           echo '<script>alert("Invalid information");location="login.html";</script>';
           //header("Location:vrd login.html");
            
           
        }
        $conn->close();
  }
     }
?>
