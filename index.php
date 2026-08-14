<?php
// ---- Database connection ----
$servername = "sql109.infinityfree.com";
$username   = "if0_42414840";
$password   = "N1mUmJNOPI";
$dbname     = "if0_42414840_infobase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 40px;
  }

  form {
    margin-bottom: 30px;
  }

  label {
    display: inline-block;
    width: 60px;
  }

  input[type="text"] {
    margin-bottom: 10px;
    padding: 4px;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    max-width: 500px;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 8px 12px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(even) {
    background-color: #fafafa;
  }
</style>
</head>
<body>

<h2>Fill the boxes</h2>

<form action="b.php" method="get">
  <label for="Name">Name:</label>
  <input type="text" id="Name" name="Name">
  <label for="Age">Age:</label>
  <input type="text" id="Age" name="Age"><br><br>
  <input type="submit" value="Submit">
</form>

<h2>Current Entries</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
  </tr>

  <?php
  $sql = "SELECT ID, Name, Age FROM users ORDER BY ID ASC";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row["ID"]) . "</td>";
      echo "<td>" . htmlspecialchars($row["Name"]) . "</td>";
      echo "<td>" . htmlspecialchars($row["Age"]) . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='3'>No entries yet.</td></tr>";
  }

  $conn->close();
  ?>
</table>

</body>
</html>
