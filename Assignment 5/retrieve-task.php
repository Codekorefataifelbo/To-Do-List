<?php
$conn = mysqli_connect("localhost:3307", "root", "", "to-dolist");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . $row["task_name"] . "</li>";
    }
} else {
    echo "<li class='list-group-item'>No tasks found</li>";
}

$conn->close();
?>
