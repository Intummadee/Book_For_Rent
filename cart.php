
<?php include "db.inc.php";?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);
$result = mysqli_query($connection, "SELECT * FROM orders");
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
</head>
<body>
<div class="main-container d-flex">
<div class="whole_sidebar">
<div class="sidebar" id="side_nav" style="font-family: 'Josefin Sans', sans-serif; font-weight: 500; font-size: 19;">
<div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
<h1 class="fs-4">
<img src="https://media.discordapp.net/attachments/1211734649337024643/1211740157766799400/Brown_and_Beige_Modern_Bookstore_Logo-removebg-preview2.png?ex=65ef4bf6&is=65dcd6f6&hm=95555cb7e8b4018139a013a942c6a5c6090df629ee0ad1c2957a1754db37e47a&=&format=webp&quality=lossless&width=418&height=153" class="logo-img" style="width: 190px; height: 70px;">
</h1>
</div>
<ul class="list-unstyled px-2">
<li class="SamplePage.php"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Home
</a></li>
<li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i>
Profile</a></li>
<li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
<span><i class="fal fa-comment"></i> Your cart</span>
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
<div class="addressDetail bg-white">
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
<div> 3 </div>
</div>
<div class="d-flex justify-content-between mb-3">
<label for="totalPriceInput" class="form-label">Total Price</label>
<div> 200 </div>
</div>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-success btn-sm align-self-end" data-bs-toggle="modal" onclick="deleteBook(this)" data-bs-target="#exampleModal">
Confirm Order
</button>
</div>
</div>
</div>

</div>
<div class="content w-100">
<div class="dashboard-content pt-5" style="margin-left: -250px;">
<h2>Your Cart</h2>
<?php
for ($i = 0; $i < 14; $i++) {
?>
<div class="card mb-3">
<img src="https://media.discordapp.net/attachments/1211734649337024643/1212018285546053662/image.png?ex=65f04efd&is=65ddd9fd&hm=b26cf53e5b170d50c95f80d823e323f590068a5332b511c6d6163f8e385cef8a&=&format=webp&quality=lossless&width=432&height=662" class="card-img-top" alt="...">
<div class="card-body d-flex justify-content-between">
<div>
  <h5 class="card-title">Card title</h5>
  <p class="card-text mb-auto">Author</p>
</div>
<a href="#" class="btn btn-danger btn-sm align-self-end" onclick="deleteBook(this)">Delete</a>
</div>
</div>
<?php
}
?>
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
<a type="a" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<a type="button" href="SamplePage.php" class="btn btn-primary">Confirm</a>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function deleteBook(element) {

}
$(document).ready(function() {
$('#confirmModal').modal({
show: false
});
});
function rentConfirm(element) {
}
$('#myModal').on('shown.bs.modal', function() {
$('#myInput').trigger('focus')
})
</script>
</body>
</html>