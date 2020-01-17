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

$done = false;
$res = "";

if(isset($_POST['add_palautang'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $amount = $_POST['price'] * $_POST['quantity'];

    $query = "INSERT INTO persons (first_name, middle_name, last_name, item, quantity, price) 
            VALUES ('".$first_name."', '".$middle_name."', '".$last_name."', '".$item."', 
            $quantity, $price,$amount')";

   
    if($conn->query($query)) {
        echo "Added successfully!";
            $done = true;
    } else {
        echo "Unsuccessful!";
            $done = false;
    }
            
}

$conn->close();

if($done) {
    header("Location: index.php");
    exit();
} 
?>