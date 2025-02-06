The solution uses MySQLi improved extension.  It's crucial to use prepared statements to prevent SQL injection vulnerabilities.

```php
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("SELECT id FROM mytable");
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
  }
} else {
  echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
```