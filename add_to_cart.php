<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbName = "cafe_db";
// $port = 3306;

// $conn = new mysqli($servername, $username, $password, $dbName, $port);
<?php include "db.inc.php";?>

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);

// $result = mysqli_query($connection, "SELECT * FROM BOOKS");
// while($query_data = mysqli_fetch_row($result)) {
//   echo "<tr>";
//   echo "<td>",$query_data[0], "</td>",
//        "<td>",$query_data[1], "</td>",
//   echo "</tr>";
// }
?>

// sudo vi add_to_cart.php
sudo mysql -u admin -h cat-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com -p
lab-password



<?php include "db.inc.php";?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<input type="submit" name="button1" value="Button1"/>';
    $book_id = $_POST['book_id'];
    echo "<h2>" . $book_id . "</h2>";
    $user_id = 1; 
    $book_query = "SELECT * FROM BOOKS WHERE book_id = $book_id";
    $book_result = mysqli_query($connection, $book_query);
    $book_data = mysqli_fetch_assoc($book_result);
    var_dump($book_data);
    echo "<h2>" . $book_data['title'] . "</h2>";
    
    
    
    $insert_query = "INSERT INTO orders (user_id, book_id, quantity, total_price) VALUES (1, $book_id, 1, {$book_data['price']});";
    $result = mysqli_query($connection, $insert_query);
    echo "<h2>" . $book_data['price'] . "</h2>";
    header("Location: SamplePage.php");
    exit();
}
?>

$insert_query = "INSERT INTO orders (user_id, book_id, quantity, total_price, order_date ) VALUES ($user_id, $book_id, 1, {$book_data['price']})";
$insert_query = "INSERT INTO orders (user_id, book_id, quantity, total_price) VALUES ($user_id , $book_id, 1, $book_data['price']);"



INSERT INTO USERS (user_id, username, password, email) VALUES 
(1, 'girl', '1111',  'Erin BowMan'),
(2, 'boy', '1111',  'Amy Ewing');