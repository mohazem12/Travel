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
    $sql = "INSERT INTO user (full_name, email, password, Gender) VALUES ('$fullname', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

$conn->close();


if (isset($_POST["delete_user"])) {
    $email = $_POST["email"];

   $sql = "DELETE FROM user WHERE email = '$email'";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form method="POST" action="">
    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" placeholder="Email Address"  required><br><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" placeholder="Username" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" placeholder="Password" required><br><br>

    <input type="submit" value="Login" name="login" formaction= adminpanel.php>
  </form>
</body>
</html>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 100px;
    }

    h1 {
      margin-bottom: 20px;
    }

    form {
      text-align: left;
    }

    label {
      font-weight: bold;
    }

    input[type="email"],
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
  </style>
