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

$sql = "SELECT * FROM books";
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
  <link rel="stylesheet" href="style.css">
  <title>Main</title>
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
        <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Home
          </a></li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i>
            Profile</a></li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
            <span><i class="fal fa-comment"></i> Your cart</span>
            <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
          </a>
        </li>
      </ul>
      <!-- <hr class="h-color mx-2"> -->
      <ul class="list-unstyled px-2">
        <li class="px-3 py-2 d-block" style="color: #949292; font-size: 18px;">CATAGORIES</li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i>
            All Books</a></li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i>
            Language</a></li>

      </ul>
    </div>
    <div class="content">
      
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://media.discordapp.net/attachments/1211734649337024643/1211734815116890233/Brown_Green_Aesthetic_Book_Store_Welcome_Banner.png?ex=65ef46fc&is=65dcd1fc&hm=7b731a86c52f2105192c72fde6c7b39c0f71fe5d91cad095c3d31ed32cb9812e&=&format=webp&quality=lossless&width=687&height=343"
              class="d-block w-100" alt="...">
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
          while ($row = $result->fetch_assoc()) {
            echo '<div class="card" style="">';
            echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="Book Cover">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["title"] . '</h5>';
            echo '<p class="card-text">' . $row["description"] . '</p>';
            echo '<p class="card-text">' . 'ราคา : ' .$row["price"] . '</p>';
            echo '<p class="card-text">' . 'ผู้แต่ง : ' .$row["author"] . '</p>';
            echo '<button type="button" class="btn" style="background-color:#8CC93E" onclick="addToCart(' . $row['book_id'] . ', 1, ' . $row['price'] . ')">Add to cart</button>';
            echo '</div>';
            echo '</div>';
          }
        
        ?>

        </div>
      </div>
    </div>
  </div>
  </div>


  <script>
  // ตอนนี้กำหนดให้ จำนวนสินค้าที่ซื้อเป็น 1 เสมอ และ user ที่ซื้อคือ Judas เท่านั้น
  function addToCart(bookId, quantity, price) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              alert(this.responseText); // แสดง alert สำหรับการตัวอย่าง
          }
      };

      // ส่ง url ไปหา php ว่า http://localhost/page.php?book_id=123&quantity=1&price=100
      xhttp.open("GET", "addToCart.php?book_id=" + bookId + "&quantity=" + quantity + "&price=" + price, true);
      xhttp.send();
  }
  </script>

</body>

</html>