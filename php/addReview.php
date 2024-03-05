<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "mysql78.unoeuro.com";
    $username = "weinreich_coaching_dk";
    $password = "D6mgFzbarteAycGw5EBR";
    $dbname = "weinreich_coaching_dk_db";
    $port = "3306"; 

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $author = $_POST['author'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("INSERT INTO reviews (author, review_text) VALUES (?, ?)");
    $stmt->bind_param("ss", $author, $review);

    if ($stmt->execute()) {
        echo "Review added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

?>