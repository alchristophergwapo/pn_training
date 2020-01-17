<?php
    $servername = "localhost";
    $username = "root";
    // $password = "2ndyrGroupA";
    $password = "";
    $database = "pntraining";
    
    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $first_name = $_POST["first_name"];
        $middle_name = $_POST["middle_name"];
        $last_name = $_POST["last_name"];
        $item = $_POST["item"];
        $quantity = $_POST['quantity'];
        $price = $_POST["price"];
        $amount = $_POST["price"] * $_POST["quantity"];

        $query = "UPDATE persons SET first_name='".$first_name."', middle_name='".$middle_name."',
            last_name ='".$last_name."', item='".$item."', quantity=$quantity, price=$price, amount=$amount WHERE id=$id";
        
        if($pass === $pass2) {
            if ($conn->query($query)) {
                echo "Succesfully updated!";
            } else {
                echo "Cannot update!";
            }
        } else {
            echo "Password don't match!";
        }
        
    }

    $conn->close();

    header("Location: index.php");
?>