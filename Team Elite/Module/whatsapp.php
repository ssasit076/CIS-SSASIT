<?php

if(isset($_POST['submit'])){

	$msg = "Hello";

	$a = "https://wa.me/".$_POST['number']."?text=".$msg;

	header("location:".$a);

}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="image/logo.ico" rel="icon">
<style>
    
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
.bg-img {
    position: fixed;
  background-image: url("image/login.png");
  height: 100%; 
    width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: absolute;
  right: 0;
  margin-top: 220px;
  margin-right: 50px;
  max-width: 350px;
  padding: 15px;
  background-color: white;
  opacity: 0.9;
    
}


input[type=text],input[type=password] {
  width: 100%;
  padding: 20px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    
  background-color: #ddd;
  
}

.btn {
  background-color: #715E0D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 100%;
}

.btn:hover {
  opacity: 1;
}
    
    
    
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="" href="1st%20page.html">Home</a></li>
  <li><a href=""></a></li>
  <li><a href=""></a></li>
  <li><a href=""></a></li>
</ul>
<div class="bg-img">
  <form action="" class="container" method="post">
    <label for="psw"><b>Contact no</b></label>
     	<input type="text" placeholder="Enter contact no" name="number" / required>
    <button type="submit" name="submit" value="Submit" class="btn">Login 
      </button>
      
      
  </form>
</div>
</body>
</html>