<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "yash";

$conn = new mysqli($host, $user, $pass, $dbname);

if(isset($_POST['submit'])){

	$imagename = $_FILES["book_img"]["name"]; 

	move_uploaded_file($_FILES["book_img"]["tmp_name"], "./uploads/".$_FILES["book_img"]["name"]);

	$book_name = $_POST['book_name'];
	$book_price = $_POST['book_price'];
    	$de = $_POST['de'];
    $cn = $_POST['cn'];
    
	$path = "uploads/".$_FILES["book_img"]["name"];

	$insert = "INSERT INTO `books`(`id`, `name`, `price`,`description`, `img`,`contactno`) VALUES ('','$book_name','$book_price','$de','$path','$cn')";
	
	$conn->query($insert);

	$id = $conn->insert_id;

	header("Location: display.php?id=".$id);
}


?>