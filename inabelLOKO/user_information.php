<?php
// Connect to the database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "abel";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user information from the database
$sql = "SELECT user_id, user_fname, user_lname, user_email FROM users";
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Information</h2>

<table>
  <thead>
    <tr>
      <th>User ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Loop through the fetched user information and display it in table rows
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["user_fname"] . "</td>";
            echo "<td>" . $row["user_lname"] . "</td>";
            echo "<td>" . $row["user_email"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found</td></tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
