<?php
$enrollno = filter_input(INPUT_POST, 'enrollno');
$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'pass');
if (!empty($enrollno) || !empty($email) || !empty($pass))
{
       $host = "localhost";
       $dbusername = "root";
       $dbpassword = "";
       $dbname = "hack";
       // Create connection
       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
       if (mysqli_connect_error())
       {
           die('Connect Error ('. mysqli_connect_errno() .') '
           . mysqli_connect_error());
       }
       else
       {
              $sql = "INSERT INTO db1 (enrollno, email, pass) VALUES ('$enrollno','$email','$pass')";
              if ($conn->query($sql))
              {
                 echo '<script>alert("Sign-up successfully");location="login.html";</script>'; 
              }
              else
              { 
                  echo '<script>alert("Data is alerady exists");location="login.html";</script>';
                echo "Error: ". $sql ."
                 ". $conn->error;
              }
              $conn->close();
           }
}
else
{
     echo "All filled are required!!!!!";
     die();
}
?>