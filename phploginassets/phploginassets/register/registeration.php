<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];  
    $gender = $_POST["gender"];

    // Insert data into the database
    $sql = "INSERT INTO user (full_name, email, password, gender) VALUES ('$fullname', '$email','$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";

    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

$conn->close();
?>
