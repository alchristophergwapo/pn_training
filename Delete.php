<?php
    $servername = "localhost";
    $username = "root";
    $password = "christopher";
    $database = "pntraining";
    
    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "DELETE FROM persons WHERE id='".$_REQUEST["id"]."'";

    $done = false;
    if ($conn->query($query)) {
        echo "Deleted";
        $done = true;
    } else {
        $done = false;
    }

    $conn->close();

    if ($done) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: Delete.php");
        exit();
    }
?>
