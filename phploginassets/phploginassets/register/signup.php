<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>SIGN IN</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>SIGN IN</h1>
    <form method="POST" action="registeration.php">
      <label for="full_name">Full Name:</label><br>
      <input type="text" id="full_name" name="full_name" placeholder="Your Full Name" required><br><br>

      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" placeholder="email@example.com" required><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" placeholder="Password" required><br>

      <label for="confirmPassword">Confirm Password:</label><br>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
      <span id="passwordError" style="color: red;"></span><br>

      <label for="gender">Gender:</label><br><br>
      <label for="male">Male</label><br>
      <input type="radio" id="male" name="gender" value="Male" required><br>

      <label for="female">Female</label><br>
      <input type="radio" id="female" name="gender" value="Female" required><br>

      <input type="submit" value="Register" formaction="../assets/login.html" onclick="validatePassword(event)">
    </form>
  </div>

  <script>
    function validatePassword(event) {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        document.getElementById("passwordError").textContent = "Passwords do not match";
        event.preventDefault(); // Prevent form submission if passwords don't match
      }
    }
  </script>
</body>
</html>
