<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>SIGN IN</h1>
    <form method="POST" action="registeration.php">
      <label for="full_name">Full Name:</label><br>
      <input type="text" id="full_name" name="full_name" placeholder="Your Full Name" ><br><br>

      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" placeholder="email@example.com" ><br>

      <label for="password">Password:</label><br>
      <input type="password" name="password" ><br>

      <label for="gender">Gender:</label><br><br>
      <label for="male">Male</label><br>
      <input type="radio" id="male" name="gender" value="Male" ><br>
      <label for="female">Female</label><br>
      <input type="radio" id="female" name="gender" value="Female" >


      <input type="submit" value="Login" formaction="../assets/login.html"> >
     
      <input type="submit" value="create account" formaction="signup.php"> ><br><br>

      <input type="submit" value="Admin Panel" formaction="/login1.php"> >


      
    </form>
  </div>
</body>
</html>