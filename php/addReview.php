<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "servername";
    $username = "username";
    $password = "password";
    $dbname = "dbname";
    $port = "port"; 

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
