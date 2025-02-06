This code uses the `mysql_*` functions, which are deprecated and removed in newer PHP versions.  Attempting to use them will lead to errors.  Specifically, `mysql_connect`, `mysql_select_db`, `mysql_query`, and `mysql_fetch_assoc` are all deprecated.

```php
<?php
$conn = mysql_connect("localhost", "user", "password");
if (!$conn) {
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("mydatabase", $conn);

$sql = "SELECT * FROM mytable";
$result = mysql_query($sql, $conn);

if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
  }
} else {
  echo "Error: " . mysql_error($conn);
}

mysql_close($conn);
?>
```