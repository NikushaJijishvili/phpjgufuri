 <?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name"; // 🔁 change to your real database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
