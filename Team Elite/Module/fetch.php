<?php
$fname = filter_input(INPUT_POST, 'fname');
$mname =filter_input(INPUT_POST, 'mname');
$lname =filter_input(INPUT_POST, 'lname');
$enrollno =filter_input(INPUT_POST, 'enrollno');
if (!empty($fname))
{
  if (!empty($mname))
  {
     if (!empty($lname))
     {
         if (!empty($enrollno))
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
       $sql = "SELECT * FROM db where fname='$fname' && mname='$mname' && lname='$lname' && enrollno='$enrollno'";
       $result =mysqli_query($conn,$sql) or die(mysqli_error());
       $rows=mysqli_num_rows($result);
        if($rows==1)
        {
            echo '<script>alert("Login Successfully");location="signup.html";</script>';
            //echo '<script>location="new.html";</script>';
            //header("Location:new.html");
            
            
        }else
        {
           echo '<script>alert("Invalid information");location="sign.html";</script>';
           //header("Location:vrd login.html");
            
           
        }
        $conn->close();
  }
     }
  }
}
?>
