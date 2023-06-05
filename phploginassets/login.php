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
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the user's data exists in the database
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "No account found. Please create an account.";
    }
}
header("Location: ../assets/login.html");
exit;

$conn->close();
?>
