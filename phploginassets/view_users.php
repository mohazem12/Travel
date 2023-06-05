<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .no-users {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registered Users</h1>
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "schoolproject";

        $conn = new mysqli($server, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Password</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["full_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["Gender"] . "</td>
                    <td>" . (isset($row["Password"]) ? $row["Password"] : "Password not available") . "</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='no-users'>No users found.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>