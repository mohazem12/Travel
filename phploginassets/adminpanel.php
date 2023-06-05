<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>Admin Panel</title>
  <style>
    /* CSS styles go here */
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    h1, h2 {
      font-family: 'Open Sans', sans-serif;
      text-align: center;
    }

    form {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
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
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Admin Panel</h1>
    <h2>Add User</h2>
    <form method="POST" action="">
      <label for="full_name">Full Name:</label><br>
      <input type="text" id="full_name" name="full_name" placeholder="Full Name" required><br><br>

      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" placeholder="Email Address"  required><br>
      
      <label for="gender">Gender:</label><br><br>
      <label for="male">Male</label><br>
      <input type="radio" id="male" name="gender" value="Male" required><br>

      <label for="female">Female</label><br>
      <input type="radio" id="female" name="gender" value="Female" required><br>

      <label for="password">Password:</label><br>
      <input type="password" name="password" placeholder="Password"  required><br><br>

      <input type="submit" value="Add User" formaction="adminregister.php">
    </form>

    <h2>Delete User</h2>
    <form method="POST" action="admin.php">
      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" placeholder="Email Address" ><br><br>

      <input type="submit" value="Delete User" formaction="deleteuser.php"><br><br>
      <input type="submit"  value="View Users" formaction="./view_users.php">
    </form>
  </div>
  
</body>
</html>