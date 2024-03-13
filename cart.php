

+----------+---------+---------+----------+-------------+---------------------+
| order_id | user_id | book_id | quantity | total_price | order_date          |
+----------+---------+---------+----------+-------------+---------------------+
|        5 |       1 |       2 |        3 |       45.67 | 2024-03-12 22:33:11 |
|        6 |       1 |       6 |        1 |      250.00 | 2024-03-12 22:37:20 |
|        7 |       1 |       7 |        1 |      200.00 | 2024-03-12 22:42:59 |
|        8 |       1 |      10 |        1 |      650.00 | 2024-03-13 02:35:51 |
|        9 |       1 |      13 |        1 |      120.00 | 2024-03-13 02:36:49 |
|       10 |       1 |       1 |        1 |      200.00 | 2024-03-13 03:44:09 |
+----------+---------+---------+----------+-------------+---------------------+


<!-- // $sql_findBook = "SELECT * FROM BOOKS where book_id = $row['book_id']"; -->


<?php include "db.inc.php";?>
<?php

echo "<h2>Hello</h2>";
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);

$sql = "SELECT * FROM orders";



$result = mysqli_query($connection, $sql);
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
      echo "Order ID: " . $row['order_id'] . "<br>";
      $sql_findBook = "SELECT * FROM BOOKS where book_id = " . $row['book_id'];
      $result_findBook = mysqli_query($connection, $sql_findBook);
      if ($result_findBook) {
          $book_data = mysqli_fetch_assoc($result_findBook);
          echo "Book ID: " . $book_data['book_id'] . "<br>";
          echo "Title: " . $book_data['title'] . "<br>";
          echo "Author: " . $book_data['author'] . "<br>";
          echo "Price: " . $book_data['price'] . "<br>";
          echo "Cover Image Path: " . $book_data['cover_image_path'] . "<br>";
          echo "Description: " . $book_data['description'] . "<br>";
      } else {
          echo "Error finding book: " . mysqli_error($connection);
      }
      echo "Quantity: " . $row['quantity'] . "<br>";
      echo "Total Price: " . $row['total_price'] . "<br>";
      echo "Order Date: " . $row['order_date'] . "<br>";
      echo "----------------------------------------<br>";
  }
} else {
  echo "Error: " . mysqli_error($connection);
}


?>






<?php
echo "<h2>Hello</h2>";

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);

echo "<h2>". book_id ."</h2>";

$sql = "SELECT DISTINCT orders.book_id, books.title, BOOKS.author, books.price, books.cover_image_path  FROM orders INNER JOIN BOOKS ON orders.book_id=books.book_id WHERE user_id = 1";
$result = mysqli_query($connection, $sql);


$total_price_query = "SELECT SUM(distinct_books.price) AS total_price
FROM (
    SELECT DISTINCT books.book_id, books.price
    FROM orders
    INNER JOIN books ON orders.book_id = books.book_id
) AS distinct_books";


echo "<h2> Wsus </h2>";

if ($result) {
  $total_price_result = $connection->query($total_price_query);
  $total_price_data = $total_price_result->fetch_assoc();
  $whole_price = $total_price_data['total_price'];

  echo "<h2>". $whole_price ."</h2>";

} else {
  echo "Error executing main query: " . $connection->error;
}




?>

$total_price_query = "SELECT SUM(distinct_books.price) AS total_price
FROM (
SELECT DISTINCT books.book_id, books.price
FROM orders
INNER JOIN books ON orders.book_id = books.book_id
) AS distinct_books";




if ($result) {
$total_price_result = mysqli_query($connection, $total_price_query);
$total_price_data = mysqli_fetch_assoc($total_price_result)

var_dump($total_price_data);
echo "<h2>" . $total_price_data['total_price'] . "</h2>";


$whole_price = $total_price_data['total_price'];
} else {
echo "Error executing main query: " . $conn->error;
}
$book_count = mysqli_num_rows($result);

?>








<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class="card mb-3">';
echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="...">';
echo '<div class="card-body d-flex justify-content-between">';
echo '<div>';
echo '<h5 class="card-title">' . $row["title"] . '</h5>';
echo '<p class="card-text mb-auto">' . $row["author"] . '</p>';
echo '</div>';
echo '<a href="#" class="btn btn-danger btn-sm align-self-end" onclick="deleteBook(this, ' . $row["book_id"] . ')">Delete</a>';
echo '</div>';
echo '</div>';
}
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
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);
$sql = "SELECT * FROM orders";
$result = $connection->query($sql);
$book_count = $result->num_rows;




?>
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
<li class=""><a href="profile.php" class="text-decoration-none px-3 py-2 d-block">
Profile</a></li>
<li class="active"><a href="cart.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
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
<script>
$(document).ready(function() {
$(".sidebar ul li").on('click', function() {
$(".sidebar ul li.active").removeClass('active');
$(this).addClass('active');
});

$('.open-btn').on('click', function() {
$('.sidebar').addClass('active');

});


$('.close-btn').on('click', function() {
$('.sidebar').removeClass('active');

})
});
</script>
<div class="content w-100" style="align-self: center; justify-content: space-between">

<div class="row align-items-start">
<div class="col align-self-start">
<div class="dashboard-content pt-5" style="margin-left: 5vw;">

<h2 class="pb-3">Your Cart</h2>
<?php 
$result = mysqli_query($connection, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
  
  
 

  echo "Order ID: " . $row['order_id'] . "<br>";
  $sql_findBook = "SELECT * FROM BOOKS where book_id = " . $row['book_id'];
  $result_findBook = mysqli_query($connection, $sql_findBook);
  if ($result_findBook) {
    $book_data = mysqli_fetch_assoc($result_findBook);
    echo '<div class="card mb-3">';
    echo '<img src="' . $book_data['cover_image_path'] . '" class="card-img-top" alt="...">';
    echo '<div class="card-body d-flex justify-content-between">';
    echo '<div>';
    echo '<h5 class="card-title">' . $book_data['title'] . '</h5>';
    echo '<p class="card-text mb-auto">' . $book_data["author"] . '</p>';
    echo '</div>';
    echo '<a href="#" class="btn btn-danger btn-sm align-self-end" onclick="deleteBook(this, ' . $row["book_id"] . ')">Delete</a>';
    echo '</div>';
    echo '</div>'; 
  } 
  }
  } 



?>

</div>
</div>
<div class="col align-self-start pt-5">
<div class="container">
<div class="addressDetail">
<div class="col bg-white h-25 pt-3 pb-3">
<h3>Details</h3>
<div class="mb-3">
<label for="addressInput" class="form-label">Address</label>
<textarea class="form-control" id="addressInput" rows="5"></textarea>
</div>
<div class="mb-3">
<label for="startDateInput" class="form-label">Start date</label>
<input type="date" class="form-control" id="startDateInput">
</div>
<div class="mb-3">
<label for="endDateInput" class="form-label">End date</label>
<input type="date" class="form-control" id="endDateInput">
</div>
<div class="d-flex justify-content-between mb-3">
<label for="amountInput" class="form-label">Amount</label>
<div> <?php echo $book_count; ?> </div>
</div>
<div class="d-flex justify-content-between mb-3">
<?php
echo '<label for="totalPriceInput" class="form-label">Total Prices</label>';
echo '<div>' . $whole_price . '</div>';
?>
</div>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-success btn-sm align-self-end" data-bs-toggle="modal" onclick="confirm(this)" data-bs-target="#exampleModal">
Confirm Order
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Order Confirmation</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
Confirm Your Order and Go back to Home Page?
</div>
<div class="modal-footer">
<button type="a" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-success btn-sm align-self-end" onclick="confirmOrder()">Confirm Order</button>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function deleteBook(element, bookId) {
$.ajax({
type: 'POST',
url: 'delete_book.php',
data: {
bookId: bookId
},
success: function(response) {
$(element).closest('.card').remove();
},
error: function(error) {
console.error('Error deleting book:', error);
}
});
}
function confirmOrder() {
$.ajax({
type: 'POST',
url: 'confirm_order.php',
success: function(response) {
window.location.href = 'SamplePage.php';
},
error: function(error) {
console.error('Error confirming order:', error);
}
});
}
</script>
</body>
</html>




