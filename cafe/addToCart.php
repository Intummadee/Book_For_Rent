<?php
$servername = "localhost";
$username = "root";
$password = ""; // xampp ไม่มี password
$dbName = "test";
$port = 4306;  // ใช้ port ที่ตัวเองตั้งไว้

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['book_id']) && isset($_GET['quantity'])  && isset($_GET['price'])  ) { #ดึงค่าที่ถูกส่งมาผ่าน URL ดังนั้น isset($_GET['book_id']) จะตรวจสอบว่ามีค่า book_id ถูกส่งมาหรือไม่ใน URL parameter.
    // ตัวอย่างที่ถูกส่งมา คือ path นี้ http://localhost/page.php?book_id=123

    $book_id = $_GET['book_id'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
    $user_id = 2; // You should get the actual user_id from your authentication system
    

    // $sql = "INSERT INTO orders (user_id, book_id, total_price) VALUES ($user_id, $book_id, 0)";
    
    $sql = "INSERT INTO orders (user_id, book_id, quantity, total_price) VALUES ($user_id, $book_id, $quantity , $quantity*$price)"; 
    // ตัวอย่างข้อมูลการสั่งซื้อ: user_id = 1, book_id = 101, สั่ง 2 เล่ม


    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
