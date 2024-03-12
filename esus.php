<?php include "db.inc.php";?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);
$result = mysqli_query($connection, "SELECT * FROM BOOKS");
?>
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
<title>Main</title>
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
<li class="active"><a href="SamplePage.php" class="text-decoration-none px-3 py-2 d-block"> Home
</a></li>
<li class=""><a href="profile.php" class="text-decoration-none px-3 py-2 d-block">
Profile</a></li>
<li class=""><a href="cart.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
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
<li class=""><a href=".romance.php" class="text-decoration-none px-3 py-2 d-block">
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
<li class=""><a href="academic.php" class="text-decoration-none px-3 py-2 d-block">
Academic</a></li>
<li class=""><a href="fantasy.php" class="text-decoration-none px-3 py-2 d-block">
Fantasy</a></li>
</ul>
</div>

<div class="content">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="https://github.com/Intummadee/Book_For_Rent/blob/main/assets/Banner.png?raw=true" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="..." class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="..." class="d-block w-100" alt="...">
</div>
</div>
</div>

<div class="dashboard-content px-3 pt-4">
<div class="row">


<?php
$index = 0;
echo "<div class='row'>";

while ($row = mysqli_fetch_assoc($result)) {
if ($index >= floor(mysqli_num_rows($result) / 2)) {
    break;
}

echo "<div class='col' style='flex: 0 0 33.33%; padding: 5px;'>";
echo "<form action='add_to_cart.php' method='post' style='display: flex; font-family: 'Josefin Sans', sans-serif;'>";
echo '<div class="card" style="">';
echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="Book Cover" >';
echo '<div class="card-body">';
echo '<h5 class="card-title">' . $row["title"] . '</h5>';
echo '<p class="card-text">' . $row["description"] . '</p>';
echo '<p class="card-text">' . 'ราคา : ' . $row["price"] . '</p>';
echo '<p class="card-text">' . 'ผู้แต่ง : ' . $row["author"] . '</p>';
echo '<input type="hidden" name="book_id" value="' . $row["book_id"] . '">';
echo '<input type="hidden" name="title" value="' . $row["title"] . '">';
echo '<input type="hidden" name="price" value="' . $row["price"] . '">';
echo '<input type="hidden" name="author" value="' . $row["author"] . '">';

echo '<input class="inp" type="submit" value="Add to cart"/>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';


$row = mysqli_fetch_assoc($result);
echo "<div class='col' style='flex: 0 0 33.33%; padding: 5px;'>";
echo "<form action='add_to_cart.php' method='post' style='display: flex; font-family: 'Josefin Sans', sans-serif;'>";
echo '<div class="card" style="">';
echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="Book Cover" >';
echo '<div class="card-body">';
echo '<h5 class="card-title">' . $row["title"] . '</h5>';
echo '<p class="card-text">' . $row["description"] . '</p>';
echo '<p class="card-text">' . 'ราคา : ' . $row["price"] . '</p>';
echo '<p class="card-text">' . 'ผู้แต่ง : ' . $row["author"] . '</p>';

echo '<input type="hidden" name="book_id" value="' . $row["book_id"] . '">';
echo '<input type="hidden" name="title" value="' . $row["title"] . '">';
echo '<input type="hidden" name="price" value="' . $row["price"] . '">';
echo '<input type="hidden" name="author" value="' . $row["author"] . '">';

echo '<input class="inp" type="submit" value="Add to cart"/>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
$index++;
}

echo "</div>";
?>
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
</body>
</html>