<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "URLs";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url'];
    $description = $_POST['description'];

    $sql = "INSERT INTO urltable (URL, description) VALUES ('$url', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT COUNT(*) AS count FROM urltable";
$result = $conn->query($sql);
$sql = "INSERT INTO urltable (URL, description) VALUES ('www.deitel.com', 'Cool site!'), ('www.php.net', 'The official PHP site')";
if ($conn->query($sql) === TRUE) {
    echo "Initial records inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM urltable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>URL</th><th>Description</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["URL"]."</td><td>".$row["description"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<!-- HTML form for submitting URL and description -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    URL: <input type="text" name="url"><br>
    Description: <input type="text" name="description"><br>
    <input type="submit" value="Submit">
</form>
