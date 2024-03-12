



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "cafe_db";
$port = 3306;
$conn = new mysqli($servername, $username, $password, $dbName, $port);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
$conn->close();

echo "Connected successfully";
?>


<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
$database = mysqli_select_db($connection, DB_DATABASE);
?>



<?php include "db.inc.php";?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<title>Profile</title>
</head>
<body>
<div class="main-container d-flex">
<div class="sidebar" id="side_nav" style="font-family: 'Josefin Sans', sans-serif; font-weight: 500; font-size: 19;">
<div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
<h1 class="fs-4">
<img src="https://github.com/Intummadee/Book_For_Rent/blob/main/assets/Book_For_Rent_Icon.png?raw=true" class="logo-img" style="width: 190px; height: 70px;">
</h1>
</div>
<ul class="list-unstyled px-2">
<li class=""><a href="SamplePage.php" class="text-decoration-none px-3 py-2 d-block"> Home
</a></li>
<li class="active"><a href="profile.php" class="text-decoration-none px-3 py-2 d-block">
Profile</a></li>
<li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">Your cart</span>
</a>
</li>
</ul>
<ul class="list-unstyled px-2">
<p class="px-3 py-2 d-block" style="color: #949292; font-size: 18px;">CATAGORIES</p>
<li class=""><a href="allbooks.php" class="text-decoration-none px-3 py-2 d-block">
All Books</a></li>
<li class=""><a href="./catagories/lang.php" class="text-decoration-none px-3 py-2 d-block">
Language</a></li>
<li class=""><a href="./catagories/romance.php" class="text-decoration-none px-3 py-2 d-block">
Romance</a></li>
<li class=""><a href="./catagories/horror.php" class="text-decoration-none px-3 py-2 d-block">
Horror</a></li>
<li class=""><a href="./catagories/history.php" class="text-decoration-none px-3 py-2 d-block">
History</a></li>
<li class=""><a href="./catagories/mystery.php" class="text-decoration-none px-3 py-2 d-block">
Mystery</a></li>
<li class=""><a href="./catagories/bio.php" class="text-decoration-none px-3 py-2 d-block">
Biography</a></li>
<li class=""><a href="./catagories/travel.php" class="text-decoration-none px-3 py-2 d-block">
Travel</a></li>
<li class=""><a href="./catagories/productive.php" class="text-decoration-none px-3 py-2 d-block">
Productivity</a></li>
<li class=""><a href="./catagories/academic.php" class="text-decoration-none px-3 py-2 d-block">
Academic</a></li>
<li class=""><a href="./catagories/fantasy.php" class="text-decoration-none px-3 py-2 d-block">
Fantasy</a></li>
</ul>
</div>
<div class="container" style="font-family: 'Josefin Sans', sans-serif; font-weight: 500; font-size: 19;">
<h1>User Profile</h1>
<form id="profileForm" style="padding: 20px">
<label for="username">Username:</label>
<input type="text" id="username" name="username" value="" readonly> 
<label for="fullname">Full Name:</label>
<input type="text" id="fullname" name="fullname" value="">
<label for="address">Address:</label>
<input type="text" id="address" name="address" value="">
<label for="phone">Phone Number:</label>
<input type="tel" id="phone" name="phone" value="">
<label for="email">Email:</label>
<input type="email" id="email" name="email" value="">
<button type="submit">Save Changes</button>
</form>
</div>
</div>
</body>
</html>