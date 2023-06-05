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
    $gender = $_POST["Gender"];
    

    // Insert data into the database
    $sql = "INSERT INTO user (full_name, email, password,  Gender) VALUES ('$fullname', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}




if (isset($_POST["delete_user"])) {
    $email = $_POST["email"];

    if ($email === "amerrawass580@gmail.com") {
        echo "User deleted successfully!";
    } else {
        echo "Invalid email address! Please check the email you entered.";
    }
}
header("Location: admin.php");
exit;

$conn->close();
?>
