


<!-- อันนี้ เป็นคำสั่งของคลาว -->
<?php include "db.inc.php"; ?>
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
  <link rel="stylesheet" href="styles.css">
  <title>Book Rent</title>

</head>
<body>
<h1>Book Rent</h1>
<?php
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $database = mysqli_select_db($connection, DB_DATABASE);
?>


<div class="main-container d-flex">
  <div class="sidebar" id="side_nav" style="font-family: 'Josefin Sans', sans-serif; font-weight: 500; font-size: 19;">
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
          <img src="https://media.discordapp.net/attachments/1211734649337024643/1211734815116890233/Brown_Green_Aesthetic_Book_Store_Welcome_Banner.png?ex=65ef46fc&is=65dcd1fc&hm=7b731a86c52f2105192c72fde6c7b39c0f71fe5d91cad095c3d31ed32cb9812e&=&format=webp&quality=lossless&width=687&height=343" class="d-block w-100" alt="...">
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
        <form method="post"> 
          <?php 
            $result = mysqli_query($connection, "SELECT * FROM BOOKS");
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col">';
                  echo '<div class="card" style="">';
                    echo '<img src="' . $row["cover_image_path"] . '" class="card-img-top" alt="Book Cover" >';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row["title"] . '</h5>';
                        echo '<p class="card-text">' . $row["description"] . '</p>';
                        echo '<p class="card-text">' . 'ราคา : ' .$row["price"] . '</p>';
                        echo '<p class="card-text">' . 'ผู้แต่ง : ' .$row["author"] . '</p>';
                        // echo '<button type="button" class="btn" style="background-color:#8CC93E" onclick="addToCart(' . $row['book_id'] . ', \'' . $row['title'] . '\', ' . $row['price'] . ')">Add to cart</button>';
                        echo '<input type="submit" name="button1" value="Button1"/>'
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

<?php
if(isset($_POST['button1'])) { 
  echo "This is Button1 that is selected"; 
}

?>


<script>
function addToCart(bookId, title, price) {
    console.log('Adding to cart:', bookId, title, price);
    alert('Book added to cart!');


}
</script>




<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>

</body>
</html>

