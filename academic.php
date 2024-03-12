
<?php include "db.inc.php";?>
<?php
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM BOOKS";
$result = $conn->query($sql);
$conn->close();
echo "Connected successfully";
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="../style2.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<title>Academic</title>
</head>
<body>
<div class="main-container d-flex">
<div class="sidebar" id="side_nav"
style="font-family: 'Josefin Sans', sans-serif; font-weight: 500; font-size: 19;">
<div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
<h1 class="fs-4">
<img
src="https://media.discordapp.net/attachments/1211734649337024643/1211740157766799400/Brown_and_Beige_Modern_Bookstore_Logo-removebg-preview2.png?ex=65ef4bf6&is=65dcd6f6&hm=95555cb7e8b4018139a013a942c6a5c6090df629ee0ad1c2957a1754db37e47a&=&format=webp&quality=lossless&width=418&height=153"
class="logo-img" style="width: 190px; height: 70px;">
</h1>
</div>
<ul class="list-unstyled px-2">
<li class=""><a href="../SamplePage.php" class="text-decoration-none px-3 py-2 d-block"> Home
</a></li>
<li class=""><a href="../profile.php" class="text-decoration-none px-3 py-2 d-block">
Profile</a></li>
<li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
Your cart</span>
</a>
</li>
</ul>
<ul class="list-unstyled px-2">
<p class="px-3 py-2 d-block" style="color: #949292; font-size: 18px;">CATAGORIES</p>
<li class=""><a href="allbooks.php" class="text-decoration-none px-3 py-2 d-block">
All Books</a></li>
<li class=""><a href="lang.php" class="text-decoration-none px-3 py-2 d-block">
Language</a></li>
<li class=""><a href="romance.php" class="text-decoration-none px-3 py-2 d-block">
Romance</a></li>
<li class=""><a href="horror.php" class="text-decoration-none px-3 py-2 d-block">
Horror</a></li>
<li class=""><a href="history.php" class="text-decoration-none px-3 py-2 d-block">
History</a></li>
<li class=""><a href="mystery.php" class="text-decoration-none px-3 py-2 d-block">
Mystery</a></li>
<li class=""><a href="bio.php" class="text-decoration-none px-3 py-2 d-block">
Biography</a></li>
<li class=""><a href="travel.php" class="text-decoration-none px-3 py-2 d-block">
Travel</a></li>
<li class=""><a href="productive.php" class="text-decoration-none px-3 py-2 d-block">
Productivity</a></li>
<li class="active"><a href="academic.php" class="text-decoration-none px-3 py-2 d-block">
Academic</a></li>
<li class=""><a href="fantasy.php" class="text-decoration-none px-3 py-2 d-block">
Fantasy</a></li>
</ul>
</div>
<script>
$(document).ready(function () {
$(".sidebar ul li").on('click', function () {
$(".sidebar ul li.active").removeClass('active');
$(this).addClass('active');
});
$('.open-btn').on('click', function () {
$('.sidebar').addClass('active');
});
$('.close-btn').on('click', function () {
$('.sidebar').removeClass('active');
})
});
</script>
<div class="content">
<div class="dashboard-content px-3 pt-4">
<div class="row">
<form method="post" style=" display: flex; font-family: 'Josefin Sans', sans-serif; flex-wrap: wrap; "> 
<?php 
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class="col" style=" flex: 0 0 33.333%; padding: 5px;">';
echo '<div class="card" style="">';
echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="Book Cover" >';
echo '<div class="card-body">';
echo '<h5 class="card-title">' . $row["title"] . '</h5>';
echo '<p class="card-text">' . $row["description"] . '</p>';
echo '<p class="card-text">' . 'ราคา : ' .$row["price"] . '</p>';
echo '<p class="card-text">' . 'ผู้แต่ง : ' .$row["author"] . '</p>';
echo '<input class = "inp" type="submit" name="button1" value="Add to cart"/>';
echo '</div>';
echo '</div>';
echo '</div>';
}
?>
</form>
</div>
</div>
</div>
</div>
<script>
</script>
</div>
</div>
</div>
</div>
</div>
<script>
function addToCart(bookId, quantity, price) {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {alert(this.responseText);}
};
xhttp.open("GET", "addToCart.php?book_id=" + bookId + "&quantity=" + quantity + "&price=" + price, true);
xhttp.send();
}
</script>
</body>
</html>