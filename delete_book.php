<?php include "db.inc.php";?>
<?php

echo "<h2>Hello</h2>";
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($connection, DB_DATABASE);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bookId'])) {
    $bookId = $_POST['bookId'];
    $deleteQuery = "DELETE FROM orders WHERE book_id = ?";
    $stmt = $connection->prepare($deleteQuery);
    $stmt->bind_param('i', $bookId);
    if ($stmt->execute()) {
        echo "Book deleted successfully";
    } else {
        echo "Error deleting book: " . $connection->error;
    }
    $stmt->close();
}

$connection->close();
?>
