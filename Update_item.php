<?php
    $servername = "localhost";
    $username = "root";
    $password = "2ndyrGroupA";
    // $password = "";
    $database = "pntraining";
    
    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $done = false;

    if(isset($_POST['update_item'])) {
        $id = $_POST['id'];
        $item = $_POST["item"];
        $quantity = $_POST['quantity'];
        $price = $_POST["price"];

        $query = "UPDATE items SET item='".$item."', quantity=$quantity, price=$price WHERE id=$id";

        if ($conn->query($query)) {
            $done = true;
            echo "Succesfully updated!";
        } else {
            $done = false;
            echo "Cannot update!";
        }
        
    }

    $conn->close();

    if($done) {
        header("Location: index.php");
    }
?>