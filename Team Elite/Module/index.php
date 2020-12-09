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
  margin-top: 20px;
  margin-right: 50px;
  max-width: 350px;
  padding: 10px;
  background-color: white;
  opacity: 0.9;
    
}


input[type=text],input[type=number] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=number]:focus {
    
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
    <?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$dbname = "yash";

		$conn = new mysqli($host, $user, $pass, $dbname);
	?>

<ul>
  <li><a class="" href="1st%20page.html">Home</a></li>
  <li><a href=""></a></li>
  <li><a href=""></a></li>
  <li><a href=""></a></li>
</ul>
<div class="bg-img">
  <form action="get_data.php" class="container" enctype="multipart/form-data" method="post">

      <center><h1>File upload</h1></center>

    <label for="email"><b>Book name</b></label>
    <input type="text" name="book_name" placeholder="Enter Book Name" required="" /> <br /> <br />
      
      <label for="email"><b>Book price</b></label>
    <input type="number" name="book_price" placeholder="Enter Book price" required="" /> <br /> <br />
      
      <label for="email"><b>Description</b></label>
    <input type="text" name="de" placeholder="Add your Description" required="" /> <br /> <br />
      
      <label for="email"><b>Contact No</b></label>
    <input type="text" name="cn" placeholder="Enter Contact no" required="" /> <br /> <br />
      
    <input type="file" name="book_img" required="" /> <br /> <br />
    <button type="submit" class="btn" name="submit" value="Upload">Submit 
      </button>
      
  </form>
</div>
</body>
</html>




    

	
	
		
		

		
		
