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
UPDATE BOOKS SET cover_image_path = 'https://m.media-amazon.com/images/I/51aIia81n8L.jpg' WHERE title = 'Listen For';


DELETE FROM BOOKS WHERE title = 'The CERULEAN';


INSERT INTO BOOKS (title, category, price, author, cover_image_path, description) VALUES 
('VISUAL GUIDE TO BIOLOGY', 'Bio', 855.00, 'Inter Nation', "https://storage.naiin.com/system/application/bookstore/resource/product/202206/549964/1000249416_front_XXL.jpg?imgname=TBX-%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%8A%E0%B8%B5%E0%B8%A7%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2-VISUAL-GUIDE-TO-BIOLOGY-" ,"one year the stories."),
('CONCEPTS IN BIOLOGY', 'Bio', 250.75, 'ธันวคม วิศวัส', "https://storage.naiin.com/system/application/bookstore/resource/product/202211/565432/1000256225_front_XXL.jpg?imgname=360-CONCEPTS-IN-BIOLOGY-PART-1-%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B8%E0%B8%87","Buiding trusting relation");


INSERT INTO BOOKS (title, category, price, author, cover_image_path, description) VALUES 
('The Mystery of Darkhill School', 'Mystery', 299.00, 'ElSlcon Pure', "https://m.media-amazon.com/images/I/41AiWNjwV-S.jpg", "Made Number 7 on july 2023"),
('A House of Ghosts', 'Mystery', 359.00, 'ElSlcon Pure', "https://images.booksense.com/images/021/994/9781950994021.jpg", "Made Number 7 on july 2023"),
('If She Fled', 'Mystery', 599.00, 'ElSlcon Pure', "https://cdn.kobo.com/book-images/f37fa6b7-26c8-4276-9542-2a0d62f62981/1200/1200/False/if-she-fled-a-kate-wise-mystery-book-5.jpg", "Made Number 7 on july 2023"),
('Listen For', 'Mystery', 599.00, 'ElSlcon Pure', "https://prodimage.images-bn.com/lf?set=key%5Bresolve.pixelRatio%5D,value%5B1%5D&set=key%5Bresolve.width%5D,value%5B300%5D&set=key%5Bresolve.height%5D,value%5B10000%5D&set=key%5Bresolve.imageFit%5D,value%5Bcontainerwidth%5D&set=key%5Bresolve.allowImageUpscaling%5D,value%5B0%5D&set=key%5Bresolve.format%5D,value%5Bwebp%5D&product=path%5B/pimages/9781250880321_p0_v6%5D&call=url%5Bfile:common/decodeProduct.chain%5D", "Made Number 7 on july 2023"),
('The Sittaford Mystery', 'Productive', 99.00, 'Cel Gracele', "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUNAO7vr9_qp0-jq2cqrpO6RHFovoVTt5CbfVJ-9loAE-oaP7axr4MDF8fRCyzf-o_954&usqp=CAU" , "New York Time");


('The girl and the Witchs Garden', 'Fantasy', 220.00, 'Erin BowMan', "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1570732371i/44779631.jpg", "The owner of the estate and Piper’s wealthy grandmother—is a witch. The grand house and its garden hold many secrets—some of which may even save her father—and Piper will need to believe in herself."),
('The CERULEAN', 'Fantasy', 220.00, 'Amy Ewing', "https://devouringbooks2017.files.wordpress.com/2018/12/The-Cerulean-by-Amy-Ewing.jpg", "Sera has always felt as if she didn’t belong among her people, the Cerulean. She is curious about everything and can’t stop questioning her three mothers, her best friend, Leela, and even the High Priestess");



INSERT INTO USERS (user_id, username, password, email) VALUES 
(1, 'girl', '1111',  'Erin BowMan'),
(2, 'boy', '1111',  'Amy Ewing');