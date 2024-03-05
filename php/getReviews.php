<?php
$host = "mysql78.unoeuro.com";
$port = "3306";
$username = "weinreich_coaching_dk";
$password = "D6mgFzbarteAycGw5EBR";
$database = "weinreich_coaching_dk_db";

$conn = new mysqli($host, $username, $password, $database, $port);
mysqli_set_charset($conn, "utf8mb4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT author, review_text FROM reviews";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

if ($result->num_rows > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $json_data = json_encode($data);
if ($json_data !== false) {
    echo $json_data;
} else {
    echo "JSON encoding failed: " . json_last_error_msg();
}

} else {
    echo "No results found.";
}

$conn->close();
?>