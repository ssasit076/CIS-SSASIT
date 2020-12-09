<?php
$rname = filter_input(INPUT_POST, 'rname');
$vname = filter_input(INPUT_POST, 'vname');
$ptype = filter_input(INPUT_POST, 'ptype');
$vvisit = filter_input(INPUT_POST, 'vvisit');
$date = filter_input(INPUT_POST, 'date');
$time = filter_input(INPUT_POST, 'time');
$mobileno = filter_input(INPUT_POST, 'mobileno');
$getno = filter_input(INPUT_POST, 'getno');
if (!empty($rname) || !empty($vname) || !empty($ptype) || !empty($vvisit) || !empty($date) || !empty($time) || !empty($mobileno) || !empty($getno))
{
       $host = "localhost";
       $dbusername = "root";
       $dbpassword = "";
       $dbname = "demo";
       // Create connection
       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
       if (mysqli_connect_error())
       {
           die('Connect Error ('. mysqli_connect_errno() .') '
           . mysqli_connect_error());
       }
       else
       {
           $sql = "INSERT INTO rm1 (refrance, visitor, proof, vision, date, time, mobile, gate) VALUES ('$rname','$vname','$ptype','$vvisit','$date','$time','$mobileno','$getno')";
           if ($conn->query($sql))
           {
               echo "New record is inserted sucessfully"; 
           }
           else
           {
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