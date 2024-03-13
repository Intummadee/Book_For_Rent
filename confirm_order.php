<?php include "db.inc.php";?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);
$order_query = "DELETE FROM orders";
if ($connection->query($order_query)) {
  echo 'Order confirmed successfully!';
} else {
  echo 'Error confirming order: ' . $connection->error;
}
$connection->close();
?>
