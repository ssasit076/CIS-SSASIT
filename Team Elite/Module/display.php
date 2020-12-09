<?php

if(!isset($_GET['id'])){
	header("Location: index.php");
}

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "yash";

$conn = new mysqli($host, $user, $pass, $dbname);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
        <link rel="stylesheet" type="text/css" href="css1.css">

    </head>
<body>

<?php
	$book_id = $_GET['id'];

	$result = $conn->query("select * from books where id='".$book_id."'");
	$book = $result->fetch_assoc(); 
?>

<div>
	<img src="<?php echo $book['img']; ?>" style="width: 300px;height: 400px;border: 3px solid #000;margin-left: 40%;margin-right: 50%">
	<p style="margin-left: 43%;margin-right: 36%;font-size: 18px;"><b>Book Name: </b><?php echo $book['name']; ?></p>
	<p style="margin-left: 43%;margin-right: 36%;font-size: 18px;"><b>Book Price: </b><?php echo $book['price']; ?></p>
    <p style="margin-left: 43%;margin-right: 36%;font-size: 18px;"><b>Description: </b><?php echo $book['description']; ?></p>
    <p style="margin-left: 43%;margin-right: 36%;font-size: 18px;"><b>Contact no: </b><?php echo $book['contactno']; ?></p>
   
</div>
    <center><div class="button">
                <a href="templet.html"><button class="button"><span>OK</span>
                    </button></a>
            </div> </center>


</body>
</html>