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


- ชนิดหนังสือ
Academic
Bio
Fantasy
History
Horror
Language
Mystery
Productive
Romance
Travel


sudo mysql -u admin -h cat-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com -p
lab-password
use php;


SELECT * FROM BOOKS;
SELECT * FROM USERS;
SELECT * FROM orders;

DESCRIBE BOOKS;
DESCRIBE orders;
DESCRIBE USERS;



// https://www.tandfonline.com/doi/cover-img/10.1080/uajb20.v018.i04

UPDATE USERS SET email = 'Cat@gmail.com' WHERE user_id = 2;
UPDATE BOOKS SET cover_image_path = 'https://mir-s3-cdn-cf.behance.net/project_modules/hd/eefb4b139083251.622950955a99d.jpg' WHERE title = 'Nature';


DELETE FROM BOOKS WHERE title = 'BIOETHICS Journal';


INSERT INTO BOOKS (title, category, price, author, cover_image_path, description) VALUES 
('Nature', 'Academic', 350.00, 'Inter Nation', "https://media.discordapp.net/attachments/1210995096326250578/1211024140879003648/bebb0356b9f323d715425f603f00b058.png?ex=65ff261e&is=65ecb11e&hm=c850363f0e38e960a97f40f26e395d9a1c71d4aac88640e92207f0cb98d87c72&=&format=webp&quality=lossless&width=503&height=670" ,"one year the stories."),
('BIOETHICS', 'Academic', 650.00, 'Beyound Consent', "https://media.discordapp.net/attachments/1210995096326250578/1211024141575135342/a36dc0bbf4e7ea661676ab9703b3ef09.png?ex=65ff261f&is=65ecb11f&hm=c248639ef4ed17674cc992e311ce94d7ba3484b8693b3b889be4e6fb4c2171b9&=&format=webp&quality=lossless&width=518&height=670","Buiding trusting relation");

INSERT INTO BOOKS (title, category, price, author, cover_image_path, description) VALUES 
('BIOETHICS', 'Academic', 270.00, 'ElSlcon Pure', "https://www.tandfonline.com/doi/cover-img/10.1080/uajb20.v023.i07", "Made Number 7 on july 2023"),
('WinterKeep', 'Romance', 120.00, 'Cel Gracele', "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1600268464l/53624358.jpg" , "New York Time");



INSERT INTO USERS (user_id, username, password, email) VALUES 
(1, 'girl', '1111',  'Erin BowMan'),
(2, 'boy', '1111',  'Amy Ewing');