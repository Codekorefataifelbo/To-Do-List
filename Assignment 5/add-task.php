<?php
$conn = mysqli_connect("localhost:3307", "root", "", "to-dolist");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST["task"];

    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$conn->close();
?>
